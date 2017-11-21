@extends("Theme::layouts.admin")

@section("head-title", __($resource->name))
@section("page-title", __($resource->name))

@section("content")
    @include("Theme::partials.banner")
    <v-toolbar dark extended class="light-blue elevation-0">
        <v-btn
            href="{{ route('users.index') }}"
            ripple
            flat
            >
            <v-icon left dark>arrow_back</v-icon>
            Back
        </v-btn>
    </v-toolbar>
    <v-container fluid>
        <v-layout row wrap>
            <v-flex xs12>
                <v-card flat class="transparent">
                    <v-layout row wrap>
                        <v-flex md8 offset-md2 xs12>
                            <v-card class="card--flex-toolbar">

                                <v-parallax height="280" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}" class="elevation-0">
                                    <v-toolbar dark class="elevation-0 transparent">
                                        <v-toolbar-title class="title">{{ __($resource->name) }}</v-toolbar-title>
                                        <v-spacer></v-spacer>
                                        <v-menu bottom left>
                                            <v-btn icon flat slot="activator" v-tooltip:bottom="{'html': 'More Actions'}">
                                                <v-icon>more_vert</v-icon>
                                            </v-btn>
                                            <v-list>
                                                <v-list-tile ripple :href="route(urls.users.edit, ('{{ $resource->id }}'))">
                                                    <v-list-tile-action>
                                                        <v-icon accent>edit</v-icon>
                                                    </v-list-tile-action>
                                                    <v-list-tile-content>
                                                        <v-list-tile-title>
                                                            {{ __('Edit') }}
                                                        </v-list-tile-title>
                                                    </v-list-tile-content>
                                                </v-list-tile>
                                                <v-list-tile ripple
                                                    @click="destroy(route(urls.users.api.destroy),
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
                                    </v-toolbar>
                                    <v-layout align-end justify-left>
                                        <v-flex xs8 offset-xs2>
                                            <div class="mb-2">
                                                <div class="pl-3 display-1">{{ $resource->fullname }}</div>
                                                <div class="pl-3 subheading">{{ $resource->displayrole }}</div>
                                            </div>
                                        </v-flex>
                                    </v-layout>
                                </v-parallax>
                                <v-card class="elevation-0">
                                    <v-toolbar class="white elevation-0">
                                        <v-fab-transition>
                                            <v-btn
                                                color="pink"
                                                fab
                                                light
                                                large
                                                absolute
                                                top
                                                left
                                                class="elevation-2"
                                                >
                                                <v-avatar class="pa-0 ma-0"><img src="{{ $resource->avatar }}" alt="Dope"></v-avatar>
                                            </v-btn>
                                        </v-fab-transition>
                                        <v-spacer></v-spacer>
                                        <v-btn round outline class="purple--text text--lighten-3">Send Message</v-btn>
                                        <v-btn round flat class="white--text purple lighten-3">View Profile</v-btn>
                                    </v-toolbar>
                                </v-card>
                                <v-divider></v-divider>
                                <v-layout row wrap align-end justify-center>
                                    <v-flex xs8 offset-xs1>
                                        <v-subheader>Basic Information</v-subheader>
                                        <v-card-text>
                                            <v-layout row wrap>
                                                <v-flex xs4><div class="grey--text">{{ __('Email') }}</div></v-flex>
                                                <v-flex xs8>{{ $resource->email }}</v-flex>
                                            </v-layout>
                                        </v-card-text>
                                        <v-card-text>
                                            <v-layout row wrap>
                                                <v-flex xs4><div class="grey--text">{{ __('Username') }}</div></v-flex>
                                                <v-flex xs8>{{ $resource->username }}</v-flex>
                                            </v-layout>
                                        </v-card-text>

                                        <v-subheader>Other Details</v-subheader>
                                        <v-card-text>
                                            <v-layout row wrap>
                                                <v-flex xs4><div class="grey--text">{{ __('Gender') }}</div></v-flex>
                                                <v-flex xs8>{{ $resource->detail->gender }}</v-flex>
                                            </v-layout>
                                        </v-card-text>
                                        <v-card-text>
                                            <v-layout row wrap>
                                                <v-flex xs4><div class="grey--text">{{ __('Birthday') }}</div></v-flex>
                                                <v-flex xs8>{{ $resource->detail->birthday }}</v-flex>
                                            </v-layout>
                                        </v-card-text>
                                        <v-card-text>
                                            <v-layout row wrap>
                                                <v-flex xs4><div class="grey--text">{{ __('Address') }}</div></v-flex>
                                                <v-flex xs8>{{ $resource->detail->address }}</v-flex>
                                            </v-layout>
                                        </v-card-text>
                                        <v-card-text>
                                            <v-layout row wrap>
                                                <v-flex xs4><div class="grey--text">{{ __('Contact No.') }}</div></v-flex>
                                                <v-flex x8>{{ $resource->detail->phone }}</v-flex>
                                            </v-layout>
                                        </v-card-text>
                                    </v-flex>
                                </v-layout>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
@endsection

@push('css')
    <style>
        .card--flex-toolbar {
            margin-top: -80px;
        }
    </style>
@endpush

@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        mixins.push({
            data () {
                return {
                    bulk: {
                        destroy: {
                            model: false,
                        },
                        searchform: {
                            model: false,
                        },
                    },
                    resource: {
                        item: {!! json_encode($resource) !!},
                        model: false,
                        dialog: {
                            model: false,
                        },
                    },
                    urls: {
                        users: {
                            api: {
                                destroy: '{{ route('api.users.destroy', 'null') }}',
                            },
                            show: '{{ route('users.show', 'null') }}',
                            edit: '{{ route('users.edit', 'null') }}',
                            destroy: '{{ route('users.destroy', 'null') }}',
                        },
                    },
                };
            },
            methods: {
                destroy (url, query) {
                    var self = this;
                    this.api().delete(url, query)
                        .then((data) => {
                            self.get('{{ route('api.users.all') }}');
                            self.snackbar = Object.assign(self.snackbar, data.response.body);
                            self.snackbar.model = true;
                        });
                },
            },
            mounted () {
                let self = this;
            }
        })
    </script>
@endpush
