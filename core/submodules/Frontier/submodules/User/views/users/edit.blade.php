@extends("Theme::layouts.admin")

@section("head-title", 'Edit User')

@section("content")
    @include("Theme::partials.banner")

    <v-container fluid>
        <form action="{{ route('users.update', $resource->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <v-layout row wrap>
                <v-flex xs12>
                    <v-card class="elevation-1">
                        <v-toolbar class="transparent elevation-0" light>
                            <v-menu>
                                <v-toolbar-title slot="activator">
                                    <span>{{ __('Edit Basic Information') }}</span>
                                    <v-icon light>arrow_drop_down</v-icon>
                                </v-toolbar-title>
                                <v-list>
                                    <v-list-tile ripple href="{{ route('users.edit', $resource->id) }}">
                                        <v-list-tile-title>
                                            {{ __('Edit Basic Information') }}
                                        </v-list-tile-title>
                                    </v-list-tile>
                                </v-list>
                                <v-list>
                                    <v-list-tile ripple href="{{ route('password.change.form', $resource->id) }}">
                                        <v-list-tile-title>
                                            {{ __('Change Password') }}
                                        </v-list-tile-title>
                                    </v-list-tile>
                                </v-list>
                            </v-menu>
                        </v-toolbar>
                        <v-card-text class="pa-0">
                            <v-layout row wrap>
                                <v-flex sm3 xs12>
                                    <v-card-text>
                                        @include("Theme::cards.avatar")
                                    </v-card-text>
                                </v-flex>
                                <v-flex sm9 xs12>
                                    <v-toolbar card class="transparent">
                                        <v-subheader>{{ __('Basic Information') }}</v-subheader>
                                        <v-spacer></v-spacer>
                                        <v-switch
                                            label="{{ __('Show required fields only') }}"
                                            v-model="suppliments.required_fields.model"
                                            value
                                            right
                                            @click.native="setStorage('settings.show_required_fields_only', (suppliments.required_fields.model))"
                                        ></v-switch>
                                    </v-toolbar>
                                    <v-card-text>
                                        <v-container fluid grid-list-lg>
                                            <v-layout row wrap>
                                                <v-flex xs2 v-show="!suppliments.required_fields.model">
                                                    <v-select
                                                        :error-messages="resource.errors.prefix"
                                                        item-text="text"
                                                        item-value="value"
                                                        label="{{ __('Prefix Name') }}"
                                                        prepend-icon="account_circle"
                                                        v-bind:items="resource.prefixname.items"
                                                        v-model="resource.prefixname.model"
                                                    ></v-select>
                                                    <input type="hidden" name="prefixname" :value="resource.prefixname.model">
                                                </v-flex>

                                                <v-flex v-bind="suppliments.required_fields.model?{[`xs6`]:true}:{[`xs3`]:true}">
                                                    <v-text-field
                                                        :prepend-icon="suppliments.required_fields.model?'account_circle':''"
                                                        :error-messages="resource.errors.firstname"
                                                        label="{{ _('First Name') }}"
                                                        name="firstname"
                                                        value="{{ old('firstname') ? old('firstname') : $resource->firstname }}"
                                                        input-group
                                                    ></v-text-field>
                                                </v-flex>
                                                <v-flex xs3 v-show="!suppliments.required_fields.model">
                                                    <v-text-field
                                                        :error-messages="resource.errors.middlename"
                                                        label="{{ _('Middle Name') }}"
                                                        name="middlename"
                                                        value="{{ old('middlename') ? old('middlename') : $resource->middlename }}"
                                                        input-group
                                                    ></v-text-field>
                                                </v-flex>
                                                <v-flex v-bind="suppliments.required_fields.model?{[`xs6`]:true}:{[`xs4`]:true}">
                                                    <v-text-field
                                                        :error-messages="resource.errors.lastname"
                                                        label="{{ _('Last Name') }}"
                                                        name="lastname"
                                                        value="{{ old('lastname') ? old('lastname') : $resource->lastname }}"
                                                        input-group
                                                        {{-- @input="(val) => { resource.item.name = val; }" --}}
                                                    ></v-text-field>
                                                </v-flex>

                                                <v-flex xs12>
                                                    <v-text-field
                                                        :error-messages="resource.errors.email"
                                                        label="{{ _('Email') }}"
                                                        name="email"
                                                        prepend-icon="email"
                                                        value="{{ old('email') ? old('email') : $resource->email }}"
                                                        input-group
                                                        >
                                                    </v-text-field>
                                                </v-flex>
                                                <v-flex xs12>
                                                    <v-text-field
                                                        :error-messages="resource.errors.username"
                                                        label="{{ _('Username') }}"
                                                        name="username"
                                                        value="{{ old('username') ? old('username') : $resource->username }}"
                                                        prepend-icon="assignment_ind"
                                                        input-group
                                                        >
                                                    </v-text-field>
                                                </v-flex>

                                                <v-flex xs12>
                                                    <div v-show="!suppliments.required_fields.model">
                                                        <v-subheader class="pl-0">{{ __('Other Details') }}</v-subheader>
                                                        <v-layout row wrap>
                                                            <v-flex sm2 xs12>
                                                                <v-subheader class="body-1 pl-0 pt-3">{{ __('Gender') }}</v-subheader>
                                                            </v-flex>
                                                            <v-flex sm6 xs12>
                                                                <v-radio-group row v-model="resource.gender.model" :mandatory="false">
                                                                    <v-radio btn label="{{ __('Male') }}"
                                                                        color="blue"
                                                                        value="Male"
                                                                        hide-details>
                                                                    </v-radio>
                                                                    <v-radio label="{{ __('Female') }}"
                                                                        color="pink"
                                                                        value="Female"
                                                                        hide-details>
                                                                    </v-radio>
                                                                    <input type="hidden" name="gender" :value="resource.gender.model">
                                                                </v-radio-group>
                                                            </v-flex>
                                                        </v-layout>

                                                        <v-menu
                                                            v-show="!suppliments.required_fields.model"
                                                            lazy
                                                            :close-on-content-click="false"
                                                            transition="scale-transition"
                                                            offset-y
                                                            full-width
                                                            :nudge-left="40"
                                                            max-width="290px"
                                                            >
                                                            <v-text-field
                                                                slot="activator"
                                                                label="{{ __('Birthday') }}"
                                                                v-model="resource.birthday.formatted"
                                                                prepend-icon="fa-birthday-cake"
                                                                name="birthday"
                                                                value="{{ old('birthday') ? old('birthday') : @$resource->detail->birthday }}"
                                                            ></v-text-field>
                                                                <v-date-picker
                                                                    v-model="resource.birthday.value"
                                                                    scrollable
                                                                    actions
                                                                    :date-format="date => new Date(date).toDateString()"
                                                                    :formatted-value.sync="resource.birthday.formatted"
                                                                >
                                                            </v-date-picker>
                                                        </v-menu>

                                                        <v-text-field
                                                            v-show="!suppliments.required_fields.model"
                                                            :error-messages="resource.errors.address"
                                                            label="{{ _('Address') }}"
                                                            prepend-icon="map"
                                                            name="address"
                                                            value="{{ old('address') ? old('address') : @$resource->detail->address }}"
                                                            input-group
                                                        ></v-text-field>
                                                        <v-text-field
                                                            v-show="!suppliments.required_fields.model"
                                                            :error-messages="resource.errors.phone"
                                                            label="{{ _('Phone') }}"
                                                            prepend-icon="phone"
                                                            name="phone"
                                                            value="{{ old('phone') ? old('phone') : @$resource->detail->phone }}"
                                                            input-group
                                                        ></v-text-field>
                                                    </div>
                                                </v-flex>
                                            </v-layout>
                                        </v-container>
                                    </v-card-text>
                                </v-flex>
                            </v-layout>
                        </v-card-text>

                        <v-divider></v-divider>

                        <v-subheader>{{ __('Selected Roles') }}</v-subheader>
                        <v-card-text class="text-xs-center">
                            <template v-if="suppliments.roles.selected.length">
                                <template v-for="(grant, i) in suppliments.roles.selected">
                                    <v-chip
                                        width="100px"
                                        label
                                        close
                                        success
                                        @click.native.stop
                                        @input="suppliments.roles.selected.splice(i, 1)"
                                        class="chip--select-multi green lighten-2 white--text"
                                        :key="i"
                                    >
                                        <input type="hidden" name="roles[]" :value="grant.id">
                                        @{{ grant.name }}
                                    </v-chip>
                                </template>
                            </template>
                            <small v-else class="grey--text">{{ __('No chosen Roles') }}</small>
                        </v-card-text>

                        <v-card-text class="pa-0">
                            <v-subheader>{{ __('Available Roles') }}</v-subheader>
                            <v-toolbar class="transparent elevation-0">
                                <v-spacer></v-spacer>
                                <v-text-field
                                    append-icon="search"
                                    label="{{ _('Search') }}"
                                    single-line
                                    hide-details
                                    v-model="suppliments.roles.searchform.query"
                                    light
                                ></v-text-field>
                            </v-toolbar>

                            <v-data-table
                                class="elevation-0"
                                no-data-text="{{ _('No resource found') }}"
                                select-all="green lighten-2"
                                selected-key="id"
                                {{-- hide-actions --}}
                                v-bind:search="suppliments.roles.searchform.query"
                                v-bind:headers="suppliments.roles.headers"
                                v-bind:items="suppliments.roles.items"
                                v-model="suppliments.roles.selected"
                                v-bind:pagination.sync="suppliments.roles.pagination"
                                >
                                <template slot="items" scope="prop">
                                    <tr role="button" :active="prop.selected" @click="prop.selected = !prop.selected">
                                        <td>
                                            <v-checkbox
                                                hide-details
                                                class="green--text text--lighten-2 pa-0"
                                                :input-value="prop.selected"
                                            ></v-checkbox>
                                        </td>
                                        <td>@{{ prop.item.name }}</td>
                                        <td>@{{ prop.item.code }}</td>
                                        <td>@{{ prop.item.description }}</td>
                                    </tr>
                                </template>
                            </v-data-table>
                        </v-card-text>
                        <v-divider></v-divider>
                        <v-card-text class="text-xs-center">
                            <v-btn primary type="submit" class="elevation-1">{{ _('Save') }}</v-btn>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </form>
    </v-container>
@endsection


@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    dataset: {
                        headers: [
                            { text: '{{ __("Name") }}', align: 'left', value: 'name' },
                            { text: '{{ __("Code") }}', align: 'left', value: 'code' },
                            { text: '{{ __("Grants") }}', align: 'left', value: 'grants' },
                        ],
                        items: [],
                        loading: true,
                        pagination: {
                            rowsPerPage: 5,
                            totalItems: 0,
                        },
                        searchform: {
                            model: false,
                            query: '',
                        },
                        selected: {!! json_encode(old('roles') ? old('roles') : $resource->roles) !!} ? {!! json_encode(old('roles') ? old('roles') : $resource->roles) !!} : [],
                        totalItems: 0,
                    },
                    resource: {
                        item: {
                            name: '',
                            code: '',
                            description: '',
                            grants: '',
                        },
                        prefixname: {
                            model: '{{ @$resource->prefixname }}',
                            items: [
                                { text: '{{ __('None') }}', value: '' },
                                { text: '{{ __('Mr') }}', value: 'Mr' },
                                { text: '{{ __('Mrs') }}', value: 'Mrs' },
                                { text: '{{ __('Ms') }}', value: 'Ms' },
                            ],
                        },
                        birthday: {
                            value: '',
                            formatted: '{{ old('birthday') ? old('birthday') : @date($resource->detail->birthday) }}',
                        },
                        notify: {
                            model: false,
                        },
                        status: {
                            model: true,
                        },
                        status_range: {
                            model: '',
                        },
                        gender: {
                            model: '{{ isset($resource->detail) ? $resource->detail->gender : '' }}',
                        },
                        errors: JSON.parse('{!! json_encode($errors->getMessages()) !!}'),
                        dialog: {
                            model: false,
                        },
                    },
                    suppliments: {
                        roles: {
                            headers: [
                                { text: '{{ __("Name") }}', align: 'left', value: 'name' },
                                { text: '{{ __("Code") }}', align: 'left', value: 'code' },
                                { text: '{{ __("Description") }}', align: 'left', value: 'description' },
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
                        },
                        avatars: {
                            selected: {!! json_encode($avatars[0]) !!},
                            items: {!! json_encode($avatars) !!}
                        },
                        required_fields: {
                            model: false,
                        },
                    },
                    urls: {
                        roles: {
                            show: '{{ route('roles.show', 'null') }}',
                            edit: '{{ route('roles.edit', 'null') }}',
                            destroy: '{{ route('roles.destroy', 'null') }}',
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
                        const { sortBy, descending, page, rowsPerPage } = this.dataset.pagination;

                        let query = {
                            descending: descending,
                            page: page,
                            q: filter,
                            sort: sortBy,
                            take: rowsPerPage,
                        };

                        this.api().search('{{ route('api.roles.search') }}', query)
                            .then((data) => {
                                this.dataset.items = data.items.data ? data.items.data : data.items;
                                this.dataset.totalItems = data.items.total ? data.items.total : data.total;
                                this.dataset.loading = false;
                            });
                    }, 1000);
                },
            },

            methods: {
                mountSuppliments () {
                    let items = {!! json_encode($roles) !!};
                    let g = [];
                    for (var i in items) {
                        g.push({
                            id: items[i].id,
                            name: items[i].name,
                            code: items[i].code,
                            description: items[i].description,
                        });
                    }
                    this.suppliments.roles.items = g;

                    let selected = {!! json_encode(old('roles') ? old('roles') : $resource->roles->pluck('id')->toArray()) !!};
                    let s = [];
                    if (selected) {
                        for (var i in selected) {
                            for (var j = items.length - 1; j >= 0; j--) {
                                if (selected[i] == items[j].id) {
                                    let instance = items[j];
                                    s.push({
                                        id: instance.id,
                                        name: instance.name,
                                    });
                                }
                            }
                        }
                    }
                    this.suppliments.roles.selected = s ? s : [];
                },

                getStorageData() {
                    this.suppliments.required_fields.model = this.getStorage('settings.show_required_fields_only') == 'true';
                },
            },

            mounted () {
                this.mountSuppliments();
                this.getStorageData();
                // this.mountSuppliments();
                // console.log("dataset.pagination", this.dataset.pagination);
            },
        });
    </script>
@endpush
