@extends("Theme::layouts.admin")

@section("content")
    @include("Theme::partials.banner")
    <v-toolbar dark class="light-blue elevation-1 sticky">
        <v-toolbar-title>{{ __('Catalogues') }}</v-toolbar-title>
        <v-spacer></v-spacer>

        {{-- Search --}}
        <template>
            <v-text-field
                :append-icon-cb="() => {dataset.searchform.model = !dataset.searchform.model}"
                :prefix="dataset.searchform.prefix"
                :prepend-icon="dataset.searchform.prepend"
                append-icon="close"
                light solo hide-details single-line
                label="Search"
                v-model="dataset.searchform.query"
                v-show="dataset.searchform.model"
            ></v-text-field>
            <v-btn v-show="!dataset.searchform.model" icon v-tooltip:left="{'html': dataset.searchform.model ? 'Clear' : 'Search resources'}" @click.native="dataset.searchform.model = !dataset.searchform.model;dataset,searchform.query = '';"><v-icon>search</v-icon></v-btn>
        </template>
        {{-- /Search --}}

        {{-- add --}}
        <v-btn icon @click.native="hidden = !hidden" v-tooltip:left="{ 'html':  hidden ? 'Add' : 'Close' }">
            <v-icon>@{{ hidden ? 'add' : 'remove' }}</v-icon>
        </v-btn>

        <v-btn icon v-tooltip:left="{ html: 'Filter' }">
            <v-icon class="subheading">fa fa-filter</v-icon>
        </v-btn>

        <v-btn icon v-tooltip:left="{ html: 'Sort' }">
            <v-icon class="subheading">fa fa-sort-amount-asc</v-icon>
        </v-btn>

        {{-- Batch Commands --}}
        <v-btn
            v-show="dataset.selected.length < 2"
            flat
            icon
            v-model="bulk.destroy.model"
            :class="bulk.destroy.model ? 'btn--active primary primary--text' : ''"
            v-tooltip:left="{'html': '{{ __('Toggle the bulk command checboxes') }}'}"
            @click.native="bulk.destroy.model = !bulk.destroy.model"
        ><v-icon>@{{ bulk.destroy.model ? 'check_circle' : 'check_circle' }}</v-icon></v-btn>
        {{-- Bulk Delete --}}
        <v-slide-y-transition>
            <template v-if="dataset.selected.length > 1">
                <form action="{{ route('catalogues.many.destroy') }}" method="POST" class="inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <template v-for="item in dataset.selected">
                        <input type="hidden" name="catalogues[]" :value="item.id">
                    </template>
                    <v-btn
                        flat
                        icon
                        type="submit"
                        v-tooltip:left="{'html': `Move ${dataset.selected.length} selected items to Trash`}"
                    ><v-icon warning>delete_sweep</v-icon></v-btn>
                </form>
            </template>
        </v-slide-y-transition>
        {{-- /Bulk Delete --}}
        {{-- /Batch Commands --}}

        {{-- Trashed --}}
        <v-btn
            icon
            flat
            href="{{ route('catalogues.trash') }}"
            light
            v-tooltip:left="{'html': `View trashed items`}"
        ><v-icon class="white--text warning--after" v-badge:{{ $trashed }}.overlap>archive</v-icon></v-btn>
        {{-- /Trashed --}}
    </v-toolbar>
    <v-container fluid grid-list-lg>
        <v-layout row wrap>
            <v-flex xs12>
                {{-- create --}}
                <v-slide-y-transition>
                    <v-card class="elevation-1 mb-3" v-show="!hidden" transition="slide-y-transition">
                        <v-toolbar card class="transparent">
                            <v-toolbar-title class="accent--text">{{ __('New Catalogue') }}</v-toolbar-title>
                        </v-toolbar>

                        <v-card-text>
                            <form action="{{ route('catalogues.store') }}" method="POST">
                                {{ csrf_field() }}
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Name') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.name"
                                            label="{{ _('Name') }}"
                                            name="name"
                                            value="{{ old('name') }}"
                                            @input="(val) => { resource.item.name = val; }"
                                            >
                                        </v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Code') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>

                                        <v-text-field
                                            :error-messages="resource.errors.code"
                                            :value="resource.item.name ? resource.item.name : '{{ old('code') }}' | slugify"
                                            hint="{{ __('Will be used as a unique catalogue name.') }}"
                                            label="{{ _('Code') }}"
                                            name="code"
                                            >
                                        </v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Description') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.description"
                                            label="{{ _('Short Description') }}"
                                            name="description"
                                            value="{{ old('description') }}"
                                            >
                                        </v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Alias') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.alias"
                                            :value="resource.item.name ? resource.item.name : '{{ old('alias') }}'"
                                            hint="{{ __('Will be used as an alias.') }}"
                                            label="{{ _('Alias') }}"
                                            name="alias"
                                            >
                                        </v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Icon') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-menu
                                            :position-absolutely="true"
                                            offset-x
                                            offset-y
                                            style="width: 100%"
                                            v-model="resource.icons.model"
                                        >
                                            <v-text-field
                                                slot="activator"
                                                :append-icon-cb="() => { resource.icons.model = !resource.icons.model }"
                                                :error-messages="resource.errors.icon"
                                                :prepend-icon="'{{ old('icon') }}' ? '{{ old('icon') }}' : resource.icons.value"
                                                :value="'{{ old('icon') }}' ? '{{ old('icon') }}' : resource.icons.value"
                                                append-icon="more_horiz"
                                                hint="{{ __('Browse through suggested icons by clicking the button above') }}"
                                                label="{{ _('Icon') }}"
                                                name="icon"
                                                @input="val => { resource.icons.value = val }"

                                            ></v-text-field>
                                            <v-card>
                                                <v-list>
                                                    <v-list-tile v-for="item in resource.icons.items" :key="item.name" @click="resource.icons.value = item.name">
                                                        <v-list-tile-action>
                                                            <v-icon>@{{ item.name }}</v-icon>
                                                        </v-list-tile-action>
                                                        <v-list-tile-title>@{{ item.name }}</v-list-tile-title>
                                                    </v-list-tile>
                                                </v-list>
                                            </v-card>
                                        </v-menu>
                                    </v-flex>
                                </v-layout>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn type="submit" primary class="elevation-1">{{ __('Save') }}</v-btn>
                            </v-card-actions>
                        </form>
                    </v-card>
                </v-slide-y-transition>
                {{-- /create --}}

                <v-card class="mb-3 elevation-1">
                    <v-data-table
                        :loading="dataset.loading"
                        :total-items="dataset.totalItems"
                        class="elevation-0"
                        no-data-text="{{ _('No resource found') }}"
                        v-bind="bulk.destroy.model?{'select-all':'primary'}:[]"
                        {{-- selected-key="id" --}}
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
                            <td v-show="bulk.destroy.model">
                                <v-checkbox
                                    hide-details
                                    class="pa-0 primary--text"
                                    v-model="prop.selected"
                                ></v-checkbox>
                            </td>
                            <td>@{{ prop.item.id }}</td>
                            <td><v-icon class="red--text text--lighten-2" v-html="prop.item.icon"></v-icon></td>
                            <td width="100%">
                                <a :href="route(urls.catalogues.edit, prop.item.id)" class="no-decoration accent--text">
                                    <strong v-tooltip:bottom="{'html': prop.item.description ? prop.item.description : prop.item.name}">@{{ prop.item.name }}</strong>
                                </a>
                            </td>
                            <td>@{{ prop.item.alias }}</td>
                            <td>@{{ prop.item.code }}</td>
                            <td>@{{ prop.item.created }}</td>
                            <td class="text-xs-center">
                                <v-menu bottom left>
                                    <v-btn icon flat slot="activator"><v-icon>more_vert</v-icon></v-btn>
                                    <v-list>
                                        <v-list-tile :href="route(urls.catalogues.edit, (prop.item.id))">
                                            <v-list-tile-action>
                                                <v-icon accent>edit</v-icon>
                                            </v-list-tile-action>
                                            <v-list-tile-content>
                                                <v-list-tile-title>
                                                    {{ __('Edit') }}
                                                </v-list-tile-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                        <v-list-tile @click="post(route(urls.catalogues.api.clone, (prop.item.id)))">
                                            <v-list-tile-action>
                                                <v-icon accent>content_copy</v-icon>
                                            </v-list-tile-action>
                                            <v-list-tile-content>
                                                <v-list-tile-title>
                                                    {{ __('Clone') }}
                                                </v-list-tile-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                        <v-list-tile
                                            @click="destroy(route(urls.catalogues.api.destroy, prop.item.id),
                                            {
                                                '_token': '{{ csrf_token() }}'
                                            })">
                                            <v-list-tile-action>
                                                <v-icon warning>delete</v-icon>
                                            </v-list-tile-action>
                                            <v-list-tile-content>
                                                <v-list-tile-title>
                                                    {{ __('Move to Trash') }}
                                                </v-list-tile-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                    </v-list>
                                </v-menu>
                            </td>
                        </template>
                    </v-data-table>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
@endsection

@push('css')
    <style>
        .no-decoration {
            text-decoration: none !important;
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
                    bulk: {
                        destroy: {
                            model: false,
                        },
                    },
                    dataset: {
                        headers: [
                            { text: '{{ __("ID") }}', align: 'left', value: 'id' },
                            { text: '{{ __("Icon") }}', align: 'left', value: 'icon' },
                            { text: '{{ __("Name") }}', align: 'left', value: 'name' },
                            { text: '{{ __("Alias") }}', align: 'left', value: 'alias' },
                            { text: '{{ __("Code") }}', align: 'left', value: 'code' },
                            { text: '{{ __("Last Modified") }}', align: 'left', value: 'updated_at' },
                            { text: '{{ __("Actions") }}', align: 'center', sortable: false, value: 'updated_at' },
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
                    resource: {
                        item: {
                            name: '',
                            code: '',
                            description: '',
                            grants: '',
                        },
                        icons: {
                            model: false,
                            items: [],
                            value: '',
                        },
                        errors: JSON.parse('{!! json_encode($errors->getMessages()) !!}'),
                    },
                    suppliments: {
                        grants: {
                            headers: [
                                { text: '{{ __("Name") }}', align: 'left', value: 'name' },
                            ],
                            pagination: {
                                rowsPerPage: 10,
                                totalItems: 0,
                            },
                            items: [],
                            selected: [],
                            searchform: {
                                query: '',
                                model: true,
                            }
                        }
                    },
                    urls: {
                        catalogues: {
                            api: {
                                clone: '{{ route('api.catalogues.clone', 'null') }}',
                                destroy: '{{ route('api.catalogues.destroy', 'null') }}',
                            },
                            show: '{{ route('catalogues.show', 'null') }}',
                            edit: '{{ route('catalogues.edit', 'null') }}',
                            destroy: '{{ route('catalogues.destroy', 'null') }}',
                        },
                    },

                    snackbar: {
                        model: false,
                        text: '',
                        context: '',
                        timeout: 2000,
                        y: 'bottom',
                        x: 'right'
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
                        const { sortBy, descending, page, rowsPerPage } = this.dataset.pagination;

                        let query = {
                            descending: descending,
                            page: page,
                            q: filter,
                            sort: sortBy,
                            take: rowsPerPage,
                        };

                        this.api().search('{{ route('api.catalogues.search') }}', query)
                            .then((data) => {
                                this.dataset.items = data.items.data ? data.items.data : data.items;
                                this.dataset.totalItems = data.items.total ? data.items.total : data.total;
                                this.dataset.loading = false;
                            });
                    }, 1000);
                },
            },

            methods: {
                get () {
                    const { sortBy, descending, page, rowsPerPage } = this.dataset.pagination;
                    let query = {
                        descending: descending,
                        page: page,
                        sort: sortBy,
                        take: rowsPerPage,
                    };
                    this.api().get('{{ route('api.catalogues.all') }}', query)
                        .then((data) => {
                            this.dataset.items = data.items.data ? data.items.data : data.items;
                            this.dataset.totalItems = data.items.total ? data.items.total : data.total;
                            this.dataset.loading = false;
                        });
                },

                post (url, query) {
                    var self = this;
                    this.api().post(url, query)
                        .then((data) => {
                            self.get('{{ route('api.catalogues.all') }}');
                            self.snackbar = Object.assign(self.snackbar, data.response.body);
                            self.snackbar.model = true;
                        });
                },

                destroy (url, query) {
                    var self = this;
                    this.api().delete(url, query)
                        .then((data) => {
                            self.get('{{ route('api.catalogues.all') }}');
                            self.snackbar = Object.assign(self.snackbar, data.response.body);
                            self.snackbar.model = true;
                        });
                },

                mountSuppliments () {
                    this.resource.icons.items = [
                        { name: 'account_balance' },
                        { name: 'account_box' },
                        { name: 'attach_file' },
                        { name: 'book' },
                        { name: 'bookmark_border' },
                        { name: 'cloud' },
                        { name: 'collections' },
                        { name: 'fa-calendar-o' },
                        { name: 'fa-clock-o' },
                        { name: 'folder_open' },
                        { name: 'insert_drive_file' },
                        { name: 'verified_user' },
                        { name: 'video_library' },
                    ];
                }
            },

            mounted () {
                this.get();
                this.mountSuppliments();
            },
        });
    </script>
@endpush
