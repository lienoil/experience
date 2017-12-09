@extends("Theme::layouts.auth")

@section("content")
<div class="grey lighten-3">
    <v-card flat height="100vh">
        {{-- <div class="red" style="height: 3px;"></div> --}}
        <v-toolbar class="grey darken-4 elevation-0" extended></v-toolbar>

        <v-container fluid grid-list-lg>
            <v-layout row wrap align-center justify-center>
                <v-flex lg6 md7 sm10 xs12>

                    @include("Theme::partials.banner")

                    <v-card class="card--flex-toolbar card--flex-toolbar--stylized" transition="slide-x-transition">
                        <v-toolbar card class="white text-xs-center" prominent>
                            <img class="brand-logo" width="40" avatar src="{{ $application->site->logo }}" alt="{{ $application->site->title }}">
                            <v-spacer v-if="settings && settings.logo_is_centered"></v-spacer>
                            <v-toolbar-title class="brand-type accent--text">{{ __($application->site->title) }} <span class="grey--text">| {{ __($application->page->title) }}</span></v-toolbar-title>
                            <v-spacer></v-spacer>
                        </v-toolbar>
                        <v-divider></v-divider>
                        <v-container fluid>
                            <form method="POST" action="{{ route('register.register') }}">
                                {{ csrf_field() }}
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Full Name') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.name"
                                            class="input-group"
                                            label="Full Name"
                                            name="name"
                                            type="name"
                                            hide-details
                                            value="{{ old('name') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Email Address') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.email"
                                            class="input-group"
                                            label="Email Address"
                                            name="email"
                                            type="email"
                                            hide-details
                                            value="{{ old('email') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Primary Number') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.contact"
                                            class="input-group"
                                            label="Primary Number"
                                            type="contact"
                                            hide-details
                                            value="{{ old('contact') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Emergency Contact Number') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.emergency"
                                            class="input-group"
                                            label="Emergency Contact Number"
                                            type="emergency"
                                            hide-details
                                            value="{{ old('emergency') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Country/City') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.country"
                                            class="input-group"
                                            label="Country/City"
                                            type="country"
                                            hide-details
                                            value="{{ old('country') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Date of Birth') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.birthday"
                                            class="input-group"
                                            label="Date of Birth"
                                            type="birthday"
                                            hide-details
                                            value="{{ old('birthday') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Password') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :append-icon-cb="() => (resource.visible = !resource.visible)"
                                            :append-icon="resource.visible ? 'visibility' : 'visibility_off'"
                                            :error-messages="resource.errors.password"
                                            :type="resource.visible ? 'text': 'password'"
                                            class="input-group"
                                            label="Password"
                                            hide-details
                                            min="6"
                                            name="password"
                                            value="{{ old('password') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs4>
                                        <v-subheader>{{ __('Confirm Password') }}</v-subheader>
                                    </v-flex>
                                    <v-flex xs8>
                                        <v-text-field
                                            :error-messages="resource.errors.password_confirmation"
                                            :type="resource.visible ? 'text': 'password'"
                                            class="input-group"
                                            label="Confirm Password"
                                            hide-details
                                            min="6"
                                            name="password_confirmation"
                                            value="{{ old('password_confirmation') }}"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>

                                <v-checkbox
                                    :error-messages="resource.errors.terms_and_conditions"
                                    :checked="resource.terms_and_conditions"
                                    label="{{ __('Agree to our Terms and Conditions') }}"
                                    light
                                    hide-details
                                    v-model="resource.terms_and_conditions"
                                    @click="() => {resource.terms_and_conditions = !resource.terms_and_conditions}"
                                >
                                </v-checkbox>
                                <input v-if="resource.terms_and_conditions" type="hidden" name="terms_and_conditions" :value="resource.terms_and_conditions">

                                <v-card-actions>
                                    {{-- <v-spacer></v-spacer> --}}
                                    <v-btn class="ma-0 primary darken-1 white--text" type="submit">{{ __("Register") }}</v-btn>
                                    <v-spacer></v-spacer>
                                </v-card-actions>
                            </form>

                            {{-- Template --}}
                            <template inline-template>
                                <div class="hr">
                                    <strong class="hr-text grey--text text--lighten-2">or</strong>
                                </div>
                                <v-layout>
                                    <v-flex md6 class="text-xs-center">
                                        <v-btn block class="grey--text elevation-0">
                                            <i class="fa fa-google">&nbsp;</i>
                                            Google
                                        </v-btn>
                                    </v-flex>
                                    <v-flex md6 class="text-xs-center">
                                        <v-spacer></v-spacer>
                                        <v-btn block class="grey--text elevation-0">
                                            <i class="fa fa-facebook">&nbsp;</i>
                                            Facebook
                                        </v-btn>
                                    </v-flex>
                                </v-layout>
                            </template>
                            {{-- /Template --}}
                        </v-container>

                        <v-divider></v-divider>

                        <v-card-actions class="pa-3">
                            <a role="button" href="{{ route('login.show') }}">{{ __('Have an Account? Login here.') }}</a>
                            <v-spacer></v-spacer>
                            <a target="_blank" role="button" href="{{ route('public.show', 'terms-and-conditions') }}">{{ __('Terms and Conditions') }}</a>
                        </v-card-actions>
                    </v-card>

                    @stack('post-login')

                    <div class="text-xs-center mt-1 mb-4">
                        <small class="white--text">{{ __($application->site->copyright) }}</small>
                    </div>

                </v-flex>
            </v-layout>
        </v-container>
    </v-card>
</div>
@endsection

@push('post-css')
    <style>
        .card--flex-toolbar--stylized {
            margin-top: -80px;
        }
        .card--flex-toolbar--stylized{margin-top:-80px}.hr{text-align:center;position:relative}.hr:after,.hr:before{content:"";display:block;width:40%;height:1px;margin:2px 1rem;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);background-color:rgba(0,0,0,.15)}.hr:after{text-align:left;position:absolute;left:0}.hr:before{position:absolute;text-align:right;right:0}[class*=application-] .color--google:hover{background-color:#db3236;color:#fff}[class*=application-] .color--facebook:hover{background-color:#3a589e;color:#fff}
        /*# sourceMappingURL=login.css.map*/
    </style>
@endpush

@push('pre-scripts')
    <script>
        mixins.push({
            data () {
                return {
                    settings: {},
                    resource: {
                        errors: JSON.parse('{!! json_encode($errors->getMessages()) !!}'),
                        item: [],
                        model: false,
                        terms_and_conditions: ('{{ old('terms_and_conditions') }}' ==  null) ? false : '{{ old('terms_and_conditions') }}',
                        visible: false,
                    }
                };
            },
        });
    </script>
@endpush
