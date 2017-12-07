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
                <v-avatar size="30px">
                    <img src="{{ assets('frontier/images/placeholder/woman.jpg') }}" alt="">
                </v-avatar>
            </a>
        </v-toolbar>
    </v-card>
    <v-container fluid grid-list-lg>
        <v-layout row wrap align-top justify-center>
            <v-flex lg8 md10 sm10 xs12>
                <v-layout row wrap align-top justify-center>
                    <v-flex md8 xs12>
                        <v-card class="elevation-1 mb-3">
                            <v-toolbar class="transparent elevation-0">
                                <v-toolbar-title>Payment Method</v-toolbar-title>
                            </v-toolbar>
                            <v-divider></v-divider>

                            <v-card-text>
                                <div class="subheading grey--text text--darken-1"><strong>Paypal</strong></div>
                                <div class="text-xs-center">
                                    <v-btn round info class="elevation-1">Log in</v-btn>
                                </div>
                            </v-card-text>

                            <v-card-text>
                                <div class="subheading grey--text text--darken-1"><strong>BPI Account Number</strong></div>
                                <v-card-text>
                                    <v-layout row wrap>
                                        <v-flex xs4>
                                            <div class="grey--text subheading">Account Number</div>
                                        </v-flex>
                                        <v-flex xs8>
                                            <div class="subheading">9641-0003-69</div>
                                        </v-flex>
                                    </v-layout>
                                    <v-layout row wrap>
                                        <v-flex xs4>
                                            <div class="grey--text subheading">Account Name</div>
                                        </v-flex>
                                        <v-flex xs8>
                                            <div class="subheading">EXPH Travel Differently Inc.</div>
                                        </v-flex>
                                    </v-layout>
                                </v-card-text>
                            </v-card-text>
                        </v-card>

                        {{-- Security --}}
                       {{--  <v-card class="elevation-1 mb-3">
                            <v-card-text>
                                <v-layout row wrap>
                                    <v-flex sm6 xs12>
                                        <v-card-text>
                                            <v-icon class="mb-2">lock_outline</v-icon>
                                            <div class="body-2">{{ __('Your Information is Safe') }}</div>
                                            <div class="body-1">{{ __('We will not sell or rent your personal contact information for any marketing purposes.') }}</div>
                                        </v-card-text>
                                    </v-flex>
                                    <v-flex sm6 xs12>
                                        <v-card-text>
                                            <v-icon class="mb-2">security</v-icon>
                                            <div class="body-2">{{ __('Secure Checkout') }}</div>
                                            <div class="body-1">{{ __('All information is encrypted. You can trust us!') }}</div>
                                        </v-card-text>
                                    </v-flex>
                                </v-layout>
                            </v-card-text>
                        </v-card> --}}
                        <v-card class="elevation-0 transparent" height="100px"></v-card>
                    </v-flex>

                    <v-flex md4 xs12 class="hidden-sm-and-down">
                        <v-card class="elevation-1 mb-3">
                            <v-card-media src="{{ assets('frontier/images/placeholder/red2.jpg') }}">
                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                                <v-card-text class="text-xs-center">
                                    <v-card dark class="elevation-0 transparent py-5">
                                        <div class="title pb-3 white--text"><strong>Random Road Trip #1</strong></div>
                                        <div class="display-2 white--text">₱<span class="fw-500"> 6,000</span></div>
                                        <div class="body-2 white--text">per person</span></div>
                                    </v-card>
                                </v-card-text>
                            </v-card-media>
                            <v-list two-line>
                                <v-list-tile>
                                    <v-list-tile-action>
                                        <v-icon color="indigo">date_range</v-icon>
                                    </v-list-tile-action>
                                    <v-list-tile-content>
                                        <v-list-tile-title>November 24 to 26</v-list-tile-title>
                                        <v-list-tile-sub-title>2017</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                                <v-list-tile>
                                    <v-list-tile-action>
                                        <v-icon color="indigo">schedule</v-icon>
                                    </v-list-tile-action>
                                    <v-list-tile-content>
                                        <v-list-tile-title>8pm, Friday</v-list-tile-title>
                                        <v-list-tile-sub-title>3 days</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                                <v-divider></v-divider>
                                <v-list-tile>
                                    <v-list-tile-action>
                                        <v-icon color="indigo">face</v-icon>
                                    </v-list-tile-action>
                                    <v-list-tile-content>
                                        <v-list-tile-title class="grey--text text--darken-1">x 3</v-list-tile-title>
                                    </v-list-tile-content>
                                    <v-list-tile-action>
                                        <v-list-tile-title>₱ 6,000</v-list-tile-title>
                                    </v-list-tile-action>
                                </v-list-tile>
                                <v-divider></v-divider>
                                <v-list-tile>
                                    <v-list-tile-content>
                                        <v-list-tile-title class="grey--text text--darken-1">Total ( PHP )</v-list-tile-title>
                                    </v-list-tile-content>
                                    <v-list-tile-action>
                                        <v-list-tile-title class="title">₱ <strong>18,000</strong></v-list-tile-title>
                                    </v-list-tile-action>
                                </v-list-tile>
                            </v-list>
                        </v-card>

                        <v-card class="elevation-1 mb-3">
                            <v-list subheader class="py-3">
                                <v-list-tile avatar>
                                    <v-list-tile-avatar tile>
                                        <img src="{{ assets('frontier/images/public/cancel.png') }}"/>
                                    </v-list-tile-avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title>Cancellation Policy</v-list-tile-title>
                                        <v-list-tile-sub-title>Cancel before the trip</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list>
                            <v-divider></v-divider>
                            <v-list two-line subheader>
                                <v-list-tile avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title class="fw-500">Full Refund</v-list-tile-title>
                                        <v-list-tile-sub-title>Before 2 weeks</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                                <v-list-tile avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title class="fw-500">Half Refund</v-list-tile-title>
                                        <v-list-tile-sub-title>5 to 10 business days</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                                <v-list-tile avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title class="fw-500">No Refund</v-list-tile-title>
                                        <v-list-tile-sub-title>Within or less than 5 days</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>

    <v-card class="elevation-1 fixed-nav hidden-md-and-up" style="z-index: 3;">
        <v-layout row wrap>
            <v-flex xs12>
                <v-card-actions>
                    <v-card-text class="py-2">
                        <div class="subheading"><strong>₱ 6,000</strong> <span class="body-1">per person</span></div>
                        <v-dialog class="hidden-md-and-up" v-model="dialog.billing" fullscreen transition="dialog-bottom-transition" :overlay=false>
                            <v-btn flat small class="body-2 primary--text details-btn" slot="activator">See details</v-btn>
                            <v-card>
                                <v-toolbar light class="white elevation-0">
                                    <v-spacer></v-spacer>
                                    <v-btn icon @click.native="dialog.billing = false">
                                        <v-icon>close</v-icon>
                                    </v-btn>
                                </v-toolbar>
                                <v-card-media src="{{ assets('frontier/images/placeholder/red2.jpg') }}">
                                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                                    <v-card-text class="text-xs-center">
                                        <v-card dark class="elevation-0 transparent py-5">
                                            <div class="title pb-3 white--text"><strong>Random Road Trip #1</strong></div>
                                            <div class="display-2 white--text">₱<span class="fw-500"> 6,000</span></div>
                                            <div class="body-2 white--text">per person</span></div>
                                        </v-card>
                                    </v-card-text>
                                </v-card-media>
                                <v-list two-line>
                                    <v-list-tile>
                                        <v-list-tile-action>
                                            <v-icon color="indigo">date_range</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>November 24 to 26</v-list-tile-title>
                                            <v-list-tile-sub-title>2017</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                    <v-list-tile>
                                        <v-list-tile-action>
                                            <v-icon color="indigo">schedule</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>8pm, Friday</v-list-tile-title>
                                            <v-list-tile-sub-title>3 days</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                    <v-divider></v-divider>
                                    <v-list-tile>
                                        <v-list-tile-action>
                                            <v-icon color="indigo">face</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title class="grey--text text--darken-1">x 3</v-list-tile-title>
                                        </v-list-tile-content>
                                        <v-list-tile-action>
                                            <v-list-tile-title>₱ 6,000</v-list-tile-title>
                                        </v-list-tile-action>
                                    </v-list-tile>
                                    <v-divider></v-divider>
                                    <v-list-tile>
                                        <v-list-tile-content>
                                            <v-list-tile-title class="grey--text text--darken-1">Total ( PHP )</v-list-tile-title>
                                        </v-list-tile-content>
                                        <v-list-tile-action>
                                            <v-list-tile-title class="title">₱ <strong>18,000</strong></v-list-tile-title>
                                        </v-list-tile-action>
                                    </v-list-tile>
                                </v-list>
                                <v-divider></v-divider>
                                <v-list subheader class="py-3">
                                    <v-list-tile avatar>
                                        <v-list-tile-avatar tile>
                                            <img src="{{ assets('frontier/images/public/cancel.png') }}"/>
                                        </v-list-tile-avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title>Cancellation Policy</v-list-tile-title>
                                            <v-list-tile-sub-title>Cancel before the trip</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                                <v-list two-line subheader>
                                    <v-list-tile avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title class="fw-500">Full Refund</v-list-tile-title>
                                            <v-list-tile-sub-title>Before 2 weeks</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                    <v-list-tile avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title class="fw-500">Half Refund</v-list-tile-title>
                                            <v-list-tile-sub-title>5 to 10 business days</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                    <v-list-tile avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title class="fw-500">No Refund</v-list-tile-title>
                                            <v-list-tile-sub-title>Within or less than 5 days</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-card>
                        </v-dialog>
                    </v-card-text>
                    <v-spacer></v-spacer>
                    <v-card-text class="py-2 text-xs-right">
                        <v-btn large primary class="elevation-1 px-2" href="\billings\show">Confirm</v-btn>
                    </v-card-text>
                </v-card-actions>
            </v-flex>
        </v-layout>
    </v-card>
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
                    removebar: true,
                    wew: true,
                }
            },
        });
    </script>
@endpush