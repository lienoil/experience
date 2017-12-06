@extends("Theme::layouts.auth")
@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            <a href="\home">
                <img src="{{ assets('frontier/images/public/logo_icon.png') }}" alt="" width="80" style="padding-top: 8px;">
            </a>
            <v-spacer></v-spacer>
            <a href="">
                <v-avatar size="40px">
                    <img src="{{ assets('frontier/images/placeholder/man.png') }}" alt="">
                </v-avatar>
            </a>
        </v-toolbar>
    </v-card>

    <section id="billing" class="white">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 sm12 xs12>
                    <v-layout row wrap>
                        <v-flex md7 xs12>
                            <v-card class="elevation-0">
                                <v-card-text class="pb-0 px-0">
                                    <h4 class="grey--text text--darken-3"><strong>{{ __("Confirm and Pay") }}</strong></h4>
                                </v-card-text>
                            </v-card>
                            <v-card class="elevation-0 py-3" height="500px">
                                {{-- <v-card-text class="px-0">
                                    <div class="title mb-2 grey--text text--darken-2">Alcohol</div>
                                    <div class="pt-3 subheading">
                                        This experience includes alcohol. Only guests who meet the legal drinking age will be served alcoholic beverages.
                                    </div>
                                </v-card-text> --}}
                            </v-card>
                            <v-divider></v-divider>
                            <v-card class="elevation-0 py-3">
                                <v-card-text class="px-0 text-xs-right">
                                    <v-btn primary large class="elevation-1" href="">Confirm and Pay</v-btn>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex md4 offset-md1 xs12 class="hidden-sm-and-down">
                            <v-card class="elevation-1 mb-3">
                                <v-card-text class="py-4">
                                    <div class="title mb-2 fw-500">Random Road Trip #1</div>
                                    <div>Hosted by Paul Appleseed</div>
                                </v-card-text>
                                <v-divider></v-divider>
                                <v-card-text class="py-4">
                                    <div class="subheading">November 24 to 26, 2017</div>
                                    <div class="subheading">Starts at 8pm, Friday</div>
                                    <div class="subheading">3 days</div>
                                </v-card-text>
                                <v-divider></v-divider>
                                <v-card-text class="py-4">
                                    <v-card-actions class="pa-0">
                                        <div class="subheading">₱ 6,000 x 1 guest</div>
                                        <v-spacer></v-spacer>
                                        <div class="subheading">₱ 6,000</div>
                                    </v-card-actions>
                                </v-card-text>
                                <v-divider></v-divider>
                                <v-card-text class="py-4">
                                    <v-card-actions class="pa-0">
                                        <div class="subheading">Total (PHP)</div>
                                        <v-spacer></v-spacer>
                                        <div class="title"><strong>₱ 6,000</strong></div>
                                    </v-card-actions>
                                </v-card-text>
                            </v-card>
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
