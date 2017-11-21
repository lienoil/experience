@extends("Frontier::layouts.admin")

@section("head-title", __('Permissions'))

@section("content")
    @include("Frontier::partials.banner")

    <v-card class="elevation-0" style="background: linear-gradient(141deg, rgb(0, 74, 107) 0%, rgb(25, 160, 255) 51%, rgb(0, 74, 107) 75%);">
        <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.60); position: absolute; width: 100%; height: 100%; z-index: 0;"></div>
        <v-layout column class="media">
            <v-card-text class="white--text">
                <v-flex md8 offset-md2 class="pt-5 pb-5">
                    <v-card-text class="white--text title">Permissions</v-card-text>
                    <v-card-text class="subheading">
                        <code>Refreshing</code>
                        {{ __(" will add and/or update all new permissions specified by the modules you've installed. Existing permissions will not be removed.") }}
                    </v-card-text>
                    <v-card-text class="subheading">
                        <code>Resetting</code>
                        {{ __(" will remove all existing permissions from the database. Then it will re-populate the database with all of the permissions defined from the modules you've installed. Doing this will not reset the roles you've created - you have to manually redefine each roles again. Proceed with caution!") }}
                    </v-card-text>
                    <v-card-text class="subheading">
                        {{ __("Refreshing will add and/or update all new permissions specified by the modules you've installed. Existing permissions will not be removed.") }}
                    </v-card-text>

                   <v-card-text>
                        <v-card-actions class="pa-0">
                            <form action="{{ route('permissions.refresh.refresh') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="text-sm-right" class="">
                                    <v-btn outline type="submit" class="btn btn--raised white white--text ma-0">
                                        <span v-tooltip:left="{'html': 'Doing this action is relatively safe'}">Refresh</span>
                                    </v-btn>
                                </div>
                            </form>
                            <form class="text-xs-center" id="reset-permissions-form" action="{{ route('permissions.reset.reset') }}" method="POST">
                                {{ csrf_field() }}
                                <v-dialog max-width="50%" v-model="permissions.dialog.model" lazy width="auto">
                                    <v-btn flat outline class="white--text" slot="activator" v-tooltip:bottom="{'html': 'Caution: This action is irreversible'}">
                                        Reset
                                    </v-btn>
                                    <v-card style="max-width: 700px;">
                                        <v-card-text class="text-xs-center">
                                            <p class="headline ma-4"><v-icon round class="error white--text" style="font-size: 80px; border-radius: 50%; padding: 10px;">delete_forever</v-icon></p>
                                            <p class="title">{{ __('Permanently Delete') }}</p>
                                            <v-flex xs8 offset-xs2>
                                                <p class="grey--text text--darken-1">
                                                    {{ __("Performing this action will completely remove all Permissions data. The Application might not work properly after this action. You might need to setup the Users' Roles, Grants, and Permissions manually again. If you do not know what the message means, DO NOT PROCEED!") }}
                                                </p>
                                            </v-flex>
                                            <p class="grey--text text--darken-1">
                                                {{ __("Would you like to proceed?") }}
                                            </p>
                                        </v-card-text>
                                        <v-divider></v-divider>
                                        <v-card-actions>
                                            <v-btn class="grey--text darken-1" flat @click.native="permissions.dialog.model=false">{{ __('Cancel') }}</v-btn>
                                            <v-spacer></v-spacer>
                                            <v-btn class="text--lighten-2 red--text" flat @click.native="proceed()">{{ __('Yes, Proceed') }}</v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-dialog>
                            </form>
                        </v-card-actions>
                   </v-card-text>
                </v-flex>
            </v-card-text>
        </v-layout>
    </v-card>

    <v-toolbar dark class="light-blue elevation-1 sticky">
        <v-toolbar-title>{{ __('Permissions') }}</v-toolbar-title>
        <v-spacer></v-spacer>

        {{-- Search --}}
        <template>
            <v-text-field
                class="mr-3"
                :append-icon-cb="() => {dataset.searchform.model = !dataset.searchform.model}"
                :prefix="dataset.searchform.prefix"
                :prepend-icon="dataset.searchform.prepend"
                append-icon="close"
                light solo hide-details single-line
                label="Search"
                v-model="dataset.searchform.query"
                v-show="dataset.searchform.model"
            ></v-text-field>
            <v-btn v-show="!dataset.searchform.model" icon v-tooltip:left="{'html': dataset.searchform.model ? 'Clear' : 'Search'}" @click.native="dataset.searchform.model = !dataset.searchform.model;dataset,searchform.query = '';"><v-icon>search</v-icon></v-btn>
        </template>
        {{-- /Search --}}
    </v-toolbar>
    <v-container fluid grid-list-lg>
        <v-layout row wrap>
            <v-flex xs12>
                <v-card class="elevation-1">
                    <v-data-table
                        :loading="dataset.loading"
                        :total-items="dataset.totalItems"
                        class="elevation-0"
                        no-data-text="{{ _('No resource found') }}"
                        selected-key="id"
                        v-bind:headers="dataset.headers"
                        v-bind:items="dataset.items"
                        v-bind:pagination.sync="dataset.pagination"
                        v-model="dataset.selected"
                    >
                        <template slot="headerCell" scope="props">
                            <span v-tooltip:bottom="{'html': props.header.text}">
                                @{{ props.header.text }}
                            </span>
                        </template>
                        <template slot="items" scope="prop">
                            <td>@{{ prop.item.id }}</td>
                            <td><strong v-tooltip:bottom="{'html': prop.item.description}">@{{ prop.item.name }}</strong></td>
                            <td>@{{ prop.item.code }}</td>
                            <td>@{{ prop.item.description }}</td>
                            <td>@{{ prop.item.created }}</td>
                        </template>
                    </v-data-table>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
@endsection

@push('css')
    <style>
        .overlay-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        .media .card__text {
            z-index: 1;
        }
        .weight-600 {
            font-weight: 600 !important;
        }
    </style>
@endpush

@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    hidden: true,
                    dataset: {
                        headers: [
                            { text: '{{ __("ID") }}', align: 'left', value: 'id' },
                            { text: '{{ __("Name") }}', align: 'left', value: 'name' },
                            { text: '{{ __("Code") }}', align: 'left', value: 'code' },
                            { text: '{{ __("Excerpt") }}', align: 'left', value: 'description' },
                            { text: '{{ __("Last Modified") }}', align: 'left', value: 'updated_at' },
                        ],
                        items: [],
                        loading: true,
                        pagination: {
                            rowsPerPage: 10,
                            totalItems: 0,
                        },
                        searchform: {
                            model: false,
                            query: '',
                        },
                        selected: [],
                        totalItems: 0,
                    },
                    permissions: {
                        dialog: {
                            model: false,
                        },
                    },
                };
            },
            watch: {
                'dataset.pagination': {
                    handler () {
                        this.get();
                    },
                    deep: true
                },

                'dataset.searchform.query': function (filter) {
                    setTimeout(() => {
                        const { sortBy, descending, page, rowsPerPage, totalItems } = this.dataset.pagination;

                        let query = {
                            descending: descending,
                            page: page,
                            q: filter,
                            sort: sortBy,
                            take: rowsPerPage,
                        };

                        this.api().search('{{ route('api.permissions.search') }}', query)
                            .then((data) => {
                                this.dataset.items = data.items.data ? data.items.data : data.items;
                                this.dataset.totalItems = data.items.total ? data.items.total : data.total;
                                this.dataset.loading = false;
                            });
                    }, 1000);
                },
            },
            methods: {
                proceed () {
                    document.getElementById("reset-permissions-form").submit();
                },

                get () {
                    const { sortBy, descending, page, rowsPerPage } = this.dataset.pagination;
                    let query = {
                        descending: descending,
                        page: page,
                        sort: sortBy,
                        take: rowsPerPage,
                    };
                    this.api().get('{{ route('api.permissions.all') }}', query)
                        .then((data) => {
                            this.dataset.items = data.items.data ? data.items.data : data.items;
                            this.dataset.totalItems = data.items.total ? data.items.total : data.total;
                            this.dataset.loading = false;
                        });
                },
            },
            mounted () {
                this.get();
            }
        });
    </script>
@endpush
