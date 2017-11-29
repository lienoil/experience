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

        <section id="show">
            <v-container fluid grid-list-lg>
                <v-layout row wrap>
                    <v-flex lg8 offset-lg2 md12 sm12 xs12>
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

                        <v-layout row wrap>
                            <v-flex lg7 md8 sm6 xs12>
                                <v-card class="elevation-0 py-3">
                                    <v-card-text class="px-0">
                                        <h4 class="grey--text text--darken-3"><strong>{{ __("Random Road Trip #1") }}</strong></h4>
                                        <h4 class="title fw-400">Life should be filled with sun and water</h4>
                                        <div class="subheading mb-2">Travel with us to a secret weekend getaway! If you are a fan of a cool breeze and remote locations, this trip is for you.</div>
                                        <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-btn flat><v-icon>favorite_border</v-icon><span class="pl-2">WishList</span></v-btn>
                                        </v-card-actions>
                                    </v-card-text>
                                </v-card>
                                <v-divider></v-divider>
                                <v-card class="elevation-0 py-3">
                                    <v-card-text class="px-0">
                                        <div class="title mb-2 grey--text text--darken-2">What is going to happen</div>
                                        <div class="body-1 mb-2">A Few Details You Might Want To Know</div>
                                        <div class="pt-3">
                                            <ul>
                                                <li class="subheading mb-1">The Random Trip fee is P6,000. DEADLINE of Payment is November 15, 2017.</li>
                                                <li class="subheading mb-1">The Fee is INCLUSIVE of Transport, Accommodation and major meals.</li>
                                                <li class="subheading mb-1">Travel Insurance Included.</li>
                                                <li class="subheading mb-1">You will a discover a culture different from Manila.</li>
                                                <li class="subheading mb-1">You will discover a LESS TOURISTY PLACE. 100%</li>
                                            </ul>
                                        </div>
                                    </v-card-text>
                                </v-card>
                                <v-divider></v-divider>
                                <v-card class="elevation-0 py-3">
                                    <v-card-text class="px-0">
                                        <div class="title mb-2 grey--text text--darken-2">What to expect</div>
                                        <div class="body-1 mb-2">A Little Something About This Trip</div>
                                        <div class="pt-3">
                                            <ul>
                                                <li class="subheading mb-1">We are going to travel with people we do not know.</li>
                                                <li class="subheading mb-1">It will be about memorable moments, big laughs, and team work.</li>
                                                <li class="subheading mb-1">Road Trip starts at 800PM of Friday, November 24</li>
                                                <li class="subheading mb-1">Be OPEN MINDED about new things.</li>
                                                <li class="subheading mb-1">Kindly bring some extra cash for food, drinks or some snacks.</li>
                                            </ul>
                                        </div>
                                    </v-card-text>
                                </v-card>
                                <v-divider></v-divider>
                                <v-card class="elevation-0 py-3">
                                    <v-card-text class="px-0">
                                        <div class="title mb-2 grey--text text--darken-2">How do I make a reservation</div>
                                        <div class="body-1 mb-2">Our Payment Options</div>
                                        <div class="pt-3">
                                            <div class="subheading mb-2">If you haven’t secured your seat yet, kindly deposit your reservation to our BPI account.</div>
                                            <div class="subheading pl-3">
                                                <div class="mb-1"><strong>BPI (Checking)</strong></div>
                                                <div class="mb-1">Account Number: 9641-0003-69. EXPH Travel Differently Inc.</div>
                                                <div class="mb-1">Please send a text message of your deposit to 0917-563-9692 or the scanned deposit slip to adventures@experience.ph</div>
                                                <div class="mb-1">Or you can pay us through CREDIT CARD via  PAYPAL’s secured payment website.</div>
                                            </div>
                                        </div>
                                    </v-card-text>
                                </v-card>
                                <v-divider></v-divider>
                                <v-card class="elevation-0 py-3">
                                    <v-card-text>
                                        <div class="title mb-2 grey--text text--darken-2">What to bring</div>
                                        <div class="body-1 mb-2">Your Roadtrip Essentials</div>
                                        <div class="pt-3">
                                            <ul>
                                                <li class="body-1 mb-1">IMPORTANT: PLEASE PACK LIGHT.</li>
                                                <li class="body-1 mb-1">Comfy and reliable shoes for wet, dry, and rocky surfaces</li>
                                                <li class="body-1 mb-1">Swim wear</li>
                                                <li class="body-1 mb-1">LOTS of Sunblock</li>
                                                <li class="body-1 mb-1">Mosquito Repellent</li>
                                            </ul>
                                        </div>
                                    </v-card-text>
                                </v-card>
                            </v-flex>

                            <v-flex lg4 offset-lg1 md4 sm6 xs12 class="sticky">
                                <v-card class="elevation-1 mb-3">
                                    <v-card-text>
                                        <div class="pb-3">
                                            <div class="headline pb-3 grey--text text--darken-3"><strong>₱ 6, 000</strong></div>

                                            <div class="body-1 mb-1"><v-icon class="subheading">schedule</v-icon> <span class="pl-2">November 24 to 26, 2017</span></div>
                                            <div class="body-1 mb-1"><v-icon class="subheading">wb_sunny</v-icon> <span class="pl-2">3 days</span></div>
                                            <div>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star_half</v-icon>
                                                4.6
                                            </div>
                                        </div>
                                        <v-btn primary large block class="elevation-1">Book</v-btn>
                                    </v-card-text>

                                    {{-- <v-card-media height="300px" src="{{ assets('frontier/images/public/alabama.jpg') }}">
                                        <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.4); position: absolute; width: 100%; height: 100%;"></div>
                                        <v-card-text>
                                            <v-container fill-height fluid class="pa-0 white--text">
                                                <v-layout row wrap align-center justify-center>
                                                    <v-card class="elevation-0 transparent text-xs-center">
                                                        <div class="display-2 pb-3 white--text"><strong>₱ 6, 000</strong></div>
                                                        <div class="py-3"><v-btn primary round class="elevation-1">Book</v-btn></div>
                                                    </v-card>
                                                </v-layout>
                                            <div class="body-1 mb-1"><v-icon class="subheading">schedule</v-icon> <span class="pl-2">November 24 to 26, 2017</span></div>
                                            <div class="body-1 mb-1"><v-icon class="subheading">wb_sunny</v-icon> <span class="pl-2">3 days</span></div>
                                            <div>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                                <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star_half</v-icon>
                                                4.6
                                            </div>
                                            </v-container>
                                        </v-card-text>
                                    </v-card-media> --}}

                                    <v-divider></v-divider>
                                    <v-card-text class="text-xs-center pa-1">
                                        <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-facebook</v-icon></v-btn>
                                        <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-twitter</v-icon></v-btn>
                                        <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-google</v-icon></v-btn>
                                    </v-card-text>
                                </v-card>
                                <v-card class="elevation-1">
                                    <v-card-text class="text-xs-center">
                                        <v-avatar size="80px"><img src="{{ assets('frontier/images/public/question.png') }} " alt=""></v-avatar>
                                        <div class="caption py-2 grey--text text--darken-1">Get some questions? Click the button below</div>
                                        <v-btn outline primary>Frequently Ask Questions</v-btn>
                                    </v-card-text>
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
        .side-navigation {
            position: fixed;
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
