@extends("Theme::layouts.auth")

@section("content")
    <v-card class="elevation-1">
        <v-toolbar light class="elevation-0 white">
            <a href="">
                <img src="{{ assets('frontier/images/public/exph_logo_o.png') }}" alt="" width="150">
            </a>

            <div class="mx-4">
                <v-menu open-on-hover top offset-y>
                    <v-btn flat slot="activator"><v-icon left>search</v-icon> Search</v-btn>
                    <v-card id="search-hover" style="max-width: 777px !important;">
                        <v-select
                            autocomplete
                            label="What do you want to do or where do you want to go?"
                            slot="activator"
                            hide-details
                            append-icon=""
                            prepend-icon="search"
                            search-input
                            light solo hide-details
                            elevation-0>
                        </v-select>
                        <v-divider></v-divider>
                        <v-container fluid grid-list-lg>
                            <v-layout row wrap>
                                <v-flex xs6 sm3 v-for="card in exp">
                                    <a href="" class="td-n">
                                        <v-card class="elevation-1">
                                            <v-card-media :src="card.src" width="100%" height="120">
                                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.4); position: absolute; width: 100%; height: 100%;"></div>
                                                <v-card-text>
                                                    <v-container fill-height fluid class="pa-0 white--text">
                                                        <v-layout row wrap align-center justify-center>
                                                        <v-card class="elevation-0 transparent text-xs-center">
                                                           <div class="caption white--text text-xs-center">@{{ card.title }}</div>
                                                        </v-card>
                                                        </v-layout>
                                                    </v-container>
                                                </v-card-text>
                                            </v-card-media>
                                        </v-card>
                                    </a>
                                </v-flex>
                                <v-flex xs6 sm3 v-for="card in reco">
                                    <a href="" class="td-n">
                                        <v-card class="elevation-1">
                                            <v-card-media :src="card.src" width="100%" height="120">
                                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.4); position: absolute; width: 100%; height: 100%;"></div>
                                                <v-card-text>
                                                    <v-container fill-height fluid class="pa-0 white--text">
                                                        <v-layout row wrap align-center justify-center>
                                                        <v-card class="elevation-0 transparent text-xs-center">
                                                           <div class="caption white--text text-xs-center">@{{ card.title }}</div>
                                                        </v-card>
                                                        </v-layout>
                                                    </v-container>
                                                </v-card-text>
                                            </v-card-media>
                                        </v-card>
                                    </a>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-card>
                </v-menu>
            </div>
            <v-spacer></v-spacer>
            <div class="hidden-md-and-down">
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

    <div class="white">
    <v-layout row wrap>
        <v-flex lg10 offset-lg1 md12 sm12 xs12>
            <v-breadcrumbs icons divider="chevron_right" class="pl-0" style="justify-content: flex-start;">
                <v-icon slot="divider">chevron_right</v-icon>
                <v-breadcrumbs-item
                    v-for="item in crumbs"
                    :key="item.text"
                    :disabled="item.disabled"
                    class="inline"
                    >
                    <small class="caption">@{{ item.text }}</small>
                </v-breadcrumbs-item>
            </v-breadcrumbs>
        </v-flex>
    </v-layout>

    <section id="show">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 md12 sm12 xs12>
                    <v-layout row wrap>
                        <v-flex md8 xs12>
                            <v-card class="elevation-0">
                                <h4 class="grey--text text--darken-3"><strong>{{ __("Random Road Trip #1") }}</strong></h4>
                                <h6 class="subheading"></h6>
                            </v-card>
                        </v-flex>

                        <v-flex md4 xs12 class="sticky">
                            <v-card class="elevation-1" height="600px">
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </section>
    </div>

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
                            text: 'Random Road Trip #1',
                            disabled: true
                        }
                    ],
                     exp: [
                        {
                            title: 'FULL MOON PARTY Luna Sea: A Random Full Moon Party #4',
                            price: '₱ 6,000',
                            category: 'Retro Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/public/alabama.jpg') }}'
                        },
                        {
                            title: 'Retro Road Trip #2',
                            price: '₱ 10,000',
                            category: 'Singles Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/public/el_capitan.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/placeholder/yosemite.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 4,000',
                            category: 'Special Road Trip',
                            date: 'July 11-13',
                            src: '{{ assets('frontier/images/public/h3.jpg') }}'
                        }
                    ],
                    reco: [
                        {
                            title: 'FULL MOON PARTY Luna Sea: A Random Full Moon Party #4',
                            price: '₱ 6,000',
                            category: 'Retro Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/public/r1.jpg') }}'
                        },
                        {
                            title: 'Retro Road Trip #2',
                            price: '₱ 10,000',
                            category: 'Singles Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/public/r3.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/public/r2.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 4,000',
                            category: 'Special Road Trip',
                            date: 'July 11-13',
                            src: '{{ assets('frontier/images/public/r4.jpg') }}'
                        }
                    ],
                }
            },
        });
    </script>
@endpush
