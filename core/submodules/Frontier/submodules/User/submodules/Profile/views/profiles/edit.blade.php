@extends("Theme::layouts.admin")

@section("head-title", __("Profile"))

@section("content")
    @include("Profile::partials.profile-banner")

    @include("Theme::partials.banner")

    <v-container fluid grid-list-lg>
        <v-card class="elevation-1">
            <v-card-text>
                <v-layout row wrap justify-center align-center>
                    <v-flex md9 xs12>
                        <form action="{{ route('profile.update', $resource->handlename) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            {{-- HIDDEN --}}
                            {{-- <input type="hidden" name="avatar" :value="resource.item.avatar"> --}}
                            {{-- <input type="hidden" name="details[backdrop]" :value="resource.details.backdrop"> --}}
                            {{-- HIDDEN --}}
                            {{-- <v-card class="elevation-1 mb-3"> --}}
                                <v-card-text>
                                    <v-subheader class="pl-0">{{ __('Basic Information') }}</v-subheader>
                                    <v-layout row wrap>
                                        <v-flex xs4 class="grey--text body-1">
                                            {{ __('Full Name') }}
                                        </v-flex>

                                        <v-flex xs8>
                                            <v-text-field
                                                label="{{ __('First name') }}"
                                                name="firstname"
                                                v-model="resource.firstname"
                                            ></v-text-field>
                                            <v-text-field
                                                label="{{ __('Middle name') }}"
                                                name="middlename"
                                                v-model="resource.middlename"
                                            ></v-text-field>
                                            <v-text-field
                                                label="{{ __('Last name') }}"
                                                name="lastname"
                                                v-model="resource.lastname"
                                            ></v-text-field>
                                        </v-flex>
                                    </v-layout>
                                </v-card-text>
                                <v-card-text class="text-xs-right">
                                    <v-spacer></v-spacer>
                                    <v-btn outline primary type="submit">{{ __('Save') }}</v-btn>
                                    <v-btn flat href="{{ route('profile.show', $resource->handlename) }}">{{ __('Cancel') }}</v-btn>
                                </v-card-text>
                            {{-- </v-card> --}}
                        </form>
                    </v-flex>
                </v-layout>
            </v-card-text>

        </v-card>
    </v-container>
@endsection

@push('pre-scripts')
    <script>
        mixins.push({
            data () {
                return {
                    resource: {
                        firstname: '{{ $resource->firstname }}',
                        middlename: '{{ $resource->middlename }}',
                        lastname: '{{ $resource->lastname }}',
                    }
                }
            },
        });
    </script>
@endpush
