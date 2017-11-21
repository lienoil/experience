@extends("Theme::layouts.admin")

@section("head-title", __("Test"))

@section("content")
    @include("Frontier::partials.banner")
    <v-parallax height="650" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}" class="hero elevation-1">
        <v-toolbar class="elevation-0 transparent sticky" dark>
            <v-toolbar-title>Experience</v-toolbar-title>
            <v-btn flat>Experience</v-btn>

            <v-spacer></v-spacer>
            <v-btn flat>Login</v-btn>
            <v-btn flat>Register</v-btn>
        </v-toolbar>
            <v-layout row wrap align-center align-center justify-center>
                <v-flex lg6 md10>
                    <v-card-text class="text-xs-center">
                        <div class="pb-4">
                            <div class="display-2 pb-2">YOURS TO EXPLORE</div>
                            <div class="title">Discover and book amazing things to do at exclusive prices</div>
                        </div>
                        <v-text-field
                            append-icon="close"
                            light solo hide-details single-line
                            label="Search"
                        ></v-text-field>
                    </v-card-text>
                </v-flex>
            </v-layout>
    </v-parallax>

    <v-container fluid grid-list-lg>
        <v-card class="elevation-1">
            <v-card-text>

            </v-card-text>
        </v-card>
    </v-container>
@endsection

@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    //
                }
            },
        });
    </script>
@endpush
