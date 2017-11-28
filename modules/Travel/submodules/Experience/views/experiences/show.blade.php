@extends("Theme::layouts.auth")

@section("content")
    <v-card class="elevation-2 sticky">
        <v-toolbar light class="elevation-0 white">
            <a href="">
                <img src="{{ assets('frontier/images/public/exph_logo_o.png') }}" alt="" width="150">
            </a>
            <v-spacer></v-spacer>
            <div class="hidden-sm-and-down">
                <v-btn small flat href="home">{{ __('Home') }}</v-btn>
                <v-btn small flat primary href="experiences">{{ __('Experience') }}</v-btn>
                <v-btn small flat>{{ __('Roadtrip') }}</v-btn>
                <v-btn small flat>{{ __('Pack and Go') }}</v-btn>
                <v-btn small flat>{{ __('Stories') }}</v-btn>
                <v-btn small flat>{{ __('Login') }}</v-btn>
                <v-btn small flat>{{ __('Register') }}</v-btn>
            </div>
        </v-toolbar>
    </v-card>

    <v-container fluid grid-list-lg>
        <v-layout row wrap>
            <v-flex xs12>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae distinctio repellat molestiae aperiam quas! Esse iste et repudiandae voluptas nemo. Voluptatem consequatur aperiam cumque pariatur recusandae eos, quas delectus in.
            </v-flex>
        </v-layout>
    </v-container>

    {{-- <v-layout row wrap>
        <v-flex lg10 offset-lg1 md12 sm12 xs12>
            <div class="py-2">
                <v-breadcrumbs icons divider="chevron_right" class="pl-0" style="justify-content: flex-start;">
                    <v-icon slot="divider">chevron_right</v-icon>
                    <v-breadcrumbs-item
                        v-for="item in crumbs"
                        :key="item.text"
                        :disabled="item.disabled"
                        >
                        <small class="caption">@{{ item.text }}</small>
                    </v-breadcrumbs-item>
                </v-breadcrumbs>
            </div>
        </v-flex>
    </v-layout>

    <section id="random">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 md12 sm12 xs12 class="white">
                    <v-layout row wrap>
                        <v-flex md8 xs12>
                            <v-card class="elevation-0">
                                <v-card-text>
                                    <h4 class="grey--text text--darken-3"><strong>{{ __("Random Road Trip #1") }}</strong></h4>
                                    <h6 class="subheading"></h6>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex md4 xs12>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ipsam possimus amet temporibus, minus, nemo aspernatur eum dignissimos rerum molestias molestiae ut. Quis vitae, voluptatibus dolorem officia, tenetur culpa molestiae?
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </section> --}}

    <footer>
        <v-layout row wrap>
            <v-flex xs12>
                <v-card class="elevation-0 black py-5">
                    <v-layout row wrap>
                        <v-flex lg10 offset-lg1 md12 sm12>
                            <v-container fill-height fluid class="pa-0 white--text">
                                <v-layout row wrap align-top justify-top>
                                    <v-flex sm3 xs12>
                                        <v-card dark class="elevation-0 transparent">
                                            <v-card-text class="grey--text">
                                                <img src="{{ assets('frontier/images/public/footer.png') }}" alt="" width="120">
                                                <div class="body-2 mb-1">About Experience Philippines</div>
                                                <div class="caption mb-3">
                                                    Experience Philippines is about UNIQUE ADVENTURES. We are a travel group that organizes RANDOM ROAD TRIPS where the destination is a SECRET and the activities are a SURPRISE.
                                                </div>
                                            </v-card-text>
                                        </v-card>
                                    </v-flex>
                                    <v-flex sm6 xs12>
                                        <v-card dark class="elevation-0 transparent">
                                            <v-card-text class="body-1">
                                                <v-layout row wrap>
                                                    <v-flex sm5 offset-sm1>
                                                        <div class="body-2 mb-2 white--text">Experience Philippines</div>
                                                        <div class="mb-1">
                                                        <a href="" class="td-n grey--text">
                                                            Who We Are
                                                        </a>
                                                        </div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Crowd Funding
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Stories From The Road
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Privacy Policy
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Contact Us
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Sponsorships Opportunities
                                                        </a></div>
                                                    </v-flex>
                                                    <v-flex sm5 offset-sm1>
                                                        <div class="body-2 mb-2 white--text">Road Trips</div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Random Road Trips
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Singles Road Trips
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Random OUTings
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Retro Road Trips
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Quick Getaway
                                                        </a></div>
                                                        <div class="mb-1"><a href="" class="td-n grey--text">
                                                            Special Road Trips
                                                        </a></div>
                                                    </v-flex>
                                                </v-layout>
                                            </v-card-text>
                                        </v-card>
                                    </v-flex>
                                    <v-flex sm3 xs12>
                                        <v-card dark class="elevation-0 transparent">
                                            <v-card-text class="caption grey--text">
                                                <div class="body-2 mb-2 white--text">Contact Us</div>
                                                <v-btn outline class="mb-2 mx-0 grey--text">Ask Us</v-btn>
                                                <div>Mobile: +63 917 563 9692</div>
                                                <div>Landline: +632 710 5641</div>
                                                <div>Email: giancarlo@experience.ph</div>
                                                <div>Unit 10G Le Grande Tower 2, Eastwood City, Bagumbayan, Quezon City, PHILIPPINES 1110.</div>
                                            </v-card-text>
                                        </v-card>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-flex>
                    </v-layout>
                </v-card>

                <v-card class="elevation-0 black">
                    <v-layout row wrap>
                        <v-flex lg10 offset-lg1 md12 sm12>
                            <v-divider class="grey darken-3"></v-divider>
                            <v-card-actions>
                                <div class="caption grey--text">© 2017 EXPERIENCE PHILIPPINES</div>
                                <v-spacer></v-spacer>
                                <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-facebook</v-icon></v-btn>
                                <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-twitter</v-icon></v-btn>
                                <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-youtube</v-icon></v-btn>
                                <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-instagram</v-icon></v-btn>
                                <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-pinterest</v-icon></v-btn>
                            </v-card-actions>
                        </v-flex>
                    </v-layout>
                </v-card>
            </v-flex>
        </v-layout>
    </footer>
@endsection

@push('css')
    <style>
        .fw-400 {
            font-weight: 400;
        }
        .fw-500 {
            font-weight: 500;
        }
        .banner .parallax__content {
            padding: 0;
        }
        .block {
            display: block !important;
        }
        footer a:hover,
        .social:hover {
            color: #ff6600 !important;
        }
        .c-lift {
            transition: all .2s ease;
        }
        .c-lift:hover {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
            box-shadow: 0 1px 8px rgba(0,0,0,.2),0 3px 4px rgba(0,0,0,.14),0 3px 3px -2px rgba(0,0,0,.12) !important;
        }

        .input-group.input-group--solo {
            background: #fff;
            min-height: 46px;
            border-radius: 2px;
            padding: 0;
            box-shadow: none;
        }
        .pagination__item,
        .pagination__navigation {
            box-shadow: none !important;
        }
        .application--light .pagination__item--active {
            background: #ff8400 !important;
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
                    states: [
                        'alabama',
                        'durian'
                    ],
                    from: null,
                    to: null,
                    menu: false,
                    dates: [
                        { title: 'Click Me' },
                        { title: 'Click Me' },
                        { title: 'Click Me' },
                        { title: 'Click Me 2' }
                    ],
                    crumbs: [
                        {
                            text: 'Experiences',
                            disabled: false
                      },
                      {
                            text: 'Random Road Trip',
                            disabled: false
                      },
                      {
                            text: 'Random Road Trip #55',
                            disabled: true
                      }
                    ]
                }
            },
        });
    </script>
@endpush
