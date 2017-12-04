@extends("Theme::layouts.auth")
@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Public::sections.nav")
        </v-toolbar>
    </v-card>

    <section class="white">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 sm12 xs12>
                    <v-layout row wrap>
                        <v-flex md4 xs12>

                        </v-flex>
                        <v-flex md8 xs12>

                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

@include("Public::sections.footer")
@endsection


@push('css')
    <style>
        .fw-400 {
            font-weight: 400;
        }
        .fw-500 {
            font-weight: 500;
        }
        .fixed-nav {
            position: fixed !important;
            bottom: 0;
            width: 100%;
            z-index: 1;
        }
        .details-btn .btn__content {
            padding-left: 0;
            padding-right: 0;
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
                    dialog: {
                        billing: false
                    },
                }
            },
        });
    </script>
@endpush
