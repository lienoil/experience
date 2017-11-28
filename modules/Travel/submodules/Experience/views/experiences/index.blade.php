@extends("Theme::layouts.auth")

@section("content")
    <v-card class="elevation-2 sticky">
        <v-toolbar light class="elevation-0 white">
            <a href="">
                <img src="{{ assets('frontier/images/public/exph_logo_o.png') }}" alt="" width="150">
            </a>
            <v-spacer></v-spacer>
            <div class="hidden-sm-and-down">
                <v-btn small flat>{{ __('Home') }}</v-btn>
                <v-btn small flat>{{ __('Roadtrip') }}</v-btn>
                <v-btn small flat>{{ __('Pack and Go') }}</v-btn>
                <v-btn small flat>{{ __('Stories') }}</v-btn>
                <v-btn small flat>{{ __('Login') }}</v-btn>
                <v-btn small flat>{{ __('Register') }}</v-btn>
            </div>
        </v-toolbar>
        <v-divider></v-divider>
        <v-card-text class="pa-0">
            <v-menu
                origin="center center"
                transition="scale-transition"
                offset-y
                >
                <v-btn flat class="grey--text text--darken-1" slot="activator">
                    {{ __('Dates') }}
                </v-btn>
                <v-card class="elevation-1">
                    <v-card-text>
                        <v-layout row wrap grid-list-lg>
                            <v-flex md6>
                                <v-card-text class="pb-0">
                                    <v-date-picker class="elevation-0" no-title v-model="from" portrait></v-date-picker>
                                </v-card-text>
                            </v-flex>
                            <v-flex md6>
                                <v-card-text class="pb-0">
                                    <v-date-picker class="elevation-0" no-title v-model="from" portrait></v-date-picker>
                                </v-card-text>
                            </v-flex>
                        </v-layout>
                    </v-card-text>
                    <v-divider></v-divider>
                    <v-card-actions>
                        <v-btn flat class="grey--text">Cancel</v-btn>
                        <v-spacer></v-spacer>
                        <v-btn flat primary>Apply</v-btn>
                    </v-card-actions>
                </v-card>
            </v-menu>
            <v-menu
                origin="center center"
                transition="scale-transition"
                offset-y
                :nudge-width="250"
                >
                <v-btn flat class="grey--text text--darken-1" slot="activator">
                    {{ __('Guests') }}
                </v-btn>
                <v-card class="elevation-1">
                    <v-card-text>
                        <v-card-actions>
                            <div class="title grey--text text--darken-3">Adults</div>
                            <v-spacer></v-spacer>
                            <v-btn outline small fab><v-icon>remove</v-icon></v-btn>
                            <div class="title grey--text text--darken-1 px-3">0</div>
                            <v-btn outline small fab><v-icon>add</v-icon></v-btn>
                        </v-card-actions>
                    </v-card-text>
                    <v-divider></v-divider>
                    <v-card-actions>
                        <v-btn flat class="grey">Cancel</v-btn>
                        <v-spacer></v-spacer>
                        <v-btn flat primary>Apply</v-btn>
                    </v-card-actions>
                </v-card>
            </v-menu>
            <v-menu
                origin="center center"
                transition="scale-transition"
                offset-y
                :nudge-width="250"
                >
                <v-btn flat class="grey--text text--darken-1" slot="activator">
                    {{ __('Categories') }}
                </v-btn>
                <v-card class="elevation-1">
                    <v-card-text>

                    </v-card-text>
                </v-card>
            </v-menu>
        </v-card-text>
    </v-card>

    <v-card class="banner elevation-1">
        <v-card-media class="elevation-0" height="350" src="{{ assets('frontier/images/public/h7.jpg') }}">
            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
            <v-layout column align-center justify-center class="white--text">
                <v-card dark class="elevation-0 transparent">
                    <h2 class="mb-2 text-xs-center"><strong>{{ __("RANDOM ROAD TRIPS") }}</strong></h2>
                    <h5 class="mb-3 text-xs-center fw-500">{{__("A Road Trip For The Adventure Seekers")}}</h5>
            </v-layout>
        </v-card-media>
    </v-card>

    <section id="random" class="py-5">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("CHOOSE A RANDOM ROAD TRIP") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Discover more about yourself, about others and about the beautiful country called the Philippines. Book your Experience with us now.</h2>
                    </v-card-text>
                    <v-layout row wrap align-center>
                        <v-flex xs12 sm4 md3 v-for="card in random">
                            <a href="" ripple class="td-n">
                                <v-card class="elevation-1 c-lift">
                                    <v-card-media
                                        height="180px"
                                        :src="card.src"
                                        class="grey lighten-4">
                                        <v-container fill-height fluid class="pa-0 white--text">
                                            <v-layout column>
                                                <v-spacer></v-spacer>
                                                <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-card-text class="pa-0 white--text title text-xs-right">
                                                    <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="card.price"></v-chip>
                                                </v-card-text>
                                                </v-card-actions>
                                            </v-layout>
                                        </v-container>
                                    </v-card-media>
                                    <v-divider class="grey lighten-3"></v-divider>
                                    <v-toolbar card dense class="transparent pt-2">
                                        <v-toolbar-title class="mr-3 subheading">
                                            <span class="body-2">@{{ card.title }}</span><br>
                                            <span class="caption">@{{ card.date }}</span><br>
                                        </v-toolbar-title>
                                    </v-toolbar>
                                    <v-card-text class="grey--text pt-4">
                                        <v-icon class="subheading grey--text text--lighten-1 pb-1">whatshot</v-icon>
                                        <span class="caption">@{{ card.category }}</span>
                                        <div>
                                            <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading deep-orange--text text--darken-1 pb-1">star_half</v-icon>
                                            4.6
                                        </div>
                                    </v-card-text>
                                </v-card>
                            </a>
                        </v-flex>
                    </v-layout>
                    <v-card-text>
                        <div class="text-xs-center">
                            <v-pagination circle :length="15" v-model="page" :total-visible="7" class="caption main-paginate"></v-pagination>
                        </div>
                    </v-card-text>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    {{-- <section id="why" class="white py-5">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 md10 offset-md1 sm12 xs12>
                    <div class="text-xs-center">
                        <h2 class="display-1">{{ __("WHY JOIN A RANDOM ROAD TRIP") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">
                        {{ __("Random Road Trips is the unique and out of the box travel concept that Experience Philippines pioneered. It is for the risk takers who want to let go of control. It is for the adventurers who want the thrill of the unknown. It is for the traveler who wants to let go of expectations. But, most of all, it is for the seeking magic on the other side of fear.") }}
                        </h2>
                    </div>
                </v-flex>
                <v-flex lg6 offset-lg3 md8 offset-md2 sm12 xs12>
                    <div class="text-xs-center">
                        <v-layout row wrap>
                            <v-flex xs12>
                                <div class="py-3">
                                    <div class="title pb-2">
                                        The Destination Is A Secret
                                    </div>
                                    <div class="body-1">
                                        We view travel as an experience. We focus on experience over the destination. Most travelers are familiar with the common and popular, but we will take you to the off-the-beaten path, to those secret places that we have found in our travels.
                                    </div>
                                </div>
                                <div class="py-3">
                                    <img src="{{ assets('frontier/images/public/r4.jpg') }}" alt="" width="100%">
                                </div>
                            </v-flex>
                            <v-flex xs12>
                                <div class="py-3">
                                    <div class="title pb-2">
                                        And The Activities A Surprise
                                    </div>
                                    <div class="body-1">
                                        Sometimes we will take you swimming beneath majestic waterfalls, or we will hike through lush forests, and we will even encourage you to do cliff diving. But, whatever it may be, we will guarantee you will have lots of fun.
                                    </div>
                                </div>
                                <div class="py-3">
                                    <img src="{{ assets('frontier/images/public/r1.jpg') }}" alt="" width="100%">
                                </div>
                            </v-flex>
                            <v-flex xs12>
                                <div class="py-3">
                                    <div class="title pb-2">
                                        Travel With People You Don’t Know
                                    </div>
                                    <div class="body-1">
                                        The most memorable connections are often made with like-minded people, and, when all of you are strangers in new places, you get to make even deeper friendships.
                                    </div>
                                </div>
                                <div class="py-3">
                                    <img src="{{ assets('frontier/images/public/h8.jpg') }}" alt="" width="100%">
                                </div>
                            </v-flex>
                            <v-flex xs12>
                                <div class="py-3">
                                    <div class="title pb-2">
                                        Step Out Of Your Comfort Zone
                                    </div>
                                    <div class="body-1">
                                        Challenge yourself. Do what you never thought you could do. It is one of the most rewarding feeling ever. Trust us on that!
                                    </div>
                                </div>
                                <div class="py-3">
                                    <img src="{{ assets('frontier/images/public/h6.jpg') }}" alt="" width="100%">
                                </div>
                            </v-flex>
                            <v-flex xs12>
                                <div class="py-3">
                                    <div class="title pb-2">
                                        Take A Leap Of Faith
                                    </div>
                                    <div class="body-1">
                                        Join the more than 600 people who have already “survived” one of our Random Road Trips. It is one of the best experiences you can give yourself.
                                    </div>
                                </div>
                                <div class="py-3">
                                    <img src="{{ assets('frontier/images/public/h5.jpg') }}" alt="" width="100%">
                                </div>
                            </v-flex>
                        </v-layout>
                    </div>
                </v-flex>
            </v-layout>
        </v-container>
    </section> --}}

    <section id="why" class="white">
        <v-container fluid class="pa-0">
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 md10 offset-md1 sm12 xs12>
                    <div class="text-xs-center py-5 px-3">
                        <h2 class="display-1">{{ __("WHY JOIN US") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">
                        {{ __("Random Road Trips is the unique and out of the box travel concept that Experience Philippines pioneered. It is for the risk takers who want to let go of control. It is for the adventurers who want the thrill of the unknown. It is for the traveler who wants to let go of expectations. But, most of all, it is for the seeking magic on the other side of fear.") }}
                        </h2>
                    </div>
                </v-flex>
            </v-layout>
            <v-layout row wrap align-center>
                <v-flex xs12
                    v-bind="{ [`md${card.flex}`]: true }"
                    v-for="card in whys"
                    :key="card.title"
                    >
                    <v-card dark class="elevation-0 content">
                        <v-card-media
                            :src="card.src"
                            height="250px"
                            >
                            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                            <div class="content-overlay"></div>
                            <v-container fill-height fluid class="pa-0 white--text">
                                <v-layout row wrap align-end justify-bottom>
                                    <v-card class="elevation-0 transparent">
                                        <v-card-text>
                                            <h5 class="white--text fw-500 text-xs-center">@{{ card.title }}</h5>
                                        </v-card-text>
                                    </v-card>
                                </v-layout>
                            </v-container>
                            <div class="content-details fadeIn-bottom">
                                <p class="subheading">@{{ card.caption }}</p>
                            </div>
                        </v-card-media>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

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
        /* hoverlay on whys */
        .content {
            position: relative;
            margin: auto;
            overflow: hidden;
        }

        .content .content-overlay {
            background: rgba(0, 0, 0, 0.8);
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            z-index: 1;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .content:hover .content-overlay {
            opacity: 1;
        }

        .content-details {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            z-index: 2;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .content:hover .content-details {
            top: 50%;
            left: 50%;
            opacity: 1;
        }

        .fadeIn-bottom {
            top: 80%;
        }
        /**/
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
                        'alabama', 'durian'],
                    from: null,
                    to: null,
                    schedule: null,
                    menu: false,
                    menu: false,
                    search: null,
                    whys: [
                        {
                            title: 'The Destination Is A Secret',
                            caption: 'We view travel as an experience. We focus on experience over the destination. Most travelers are familiar with the common and popular, but we will take you to the off-the-beaten path, to those secret places that we have found in our travels.',
                            src: '{{ assets('frontier/images/public/el_capitan.jpg') }}',
                            flex: 8,
                            height: '100%'
                        },
                        {
                            title: 'The Activities A Surprise',
                            caption: 'Sometimes we will take you swimming beneath majestic waterfalls, or we will hike through lush forests, and we will even encourage you to do cliff diving. But, whatever it may be, we will guarantee you will have lots of fun.',
                            src: '{{ assets('frontier/images/public/r1.jpg') }}',
                            flex: 4
                        },
                        {
                            title: 'Travel With People You Don’t Know',
                            caption: 'The most memorable connections are often made with like-minded people, and, when all of you are strangers in new places, you get to make even deeper friendships.',
                            src: '{{ assets('frontier/images/public/alabama.jpg') }}',
                            flex: 3
                        },
                        {
                            title: 'Step Out Of Your Comfort Zone',
                            caption: 'Challenge yourself. Do what you never thought you could do. It is one of the most rewarding feeling ever. Trust us on that!',
                            src: '{{ assets('frontier/images/public/r3.jpg') }}',
                            flex: 6
                        },
                        {
                            title: 'Take A Leap Of Faith',
                            caption: 'Join the more than 600 people who have already “survived” one of our Random Road Trips. It is one of the best experiences you can give yourself.',
                            src: '{{ assets('frontier/images/public/h7.jpg') }}',
                            flex: 3
                        },
                    ],
                    dates: [
                        { title: 'Click Me' },
                        { title: 'Click Me' },
                        { title: 'Click Me' },
                        { title: 'Click Me 2' }
                    ],
                    random: [
                        {
                            title: 'Random Road Trip #1',
                            price: '₱ 6,000',
                            category: 'Random Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/public/alabama.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #2',
                            price: '₱ 10,000',
                            category: 'Random Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/public/el_capitan.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #3',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/placeholder/yosemite.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #4',
                            price: '₱ 4,000',
                            category: 'Random Road Trip',
                            date: 'July 11-13',
                            src: '{{ assets('frontier/images/public/h3.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #5',
                            price: '₱ 4,000',
                            category: 'Random Road Trip',
                            date: 'July 11-13',
                            src: '{{ assets('frontier/images/public/r1.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #6',
                            price: '₱ 6,000',
                            category: 'Random Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/public/r3.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #7',
                            price: '₱ 10,000',
                            category: 'Random Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/public/r2.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #8',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/public/r4.jpg') }}'
                        }
                    ],
                }
            },
        });
    </script>
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script>
        $(window).scroll(function () {
            if ( $(this).scrollTop() > 600 && !$('header').hasClass('open') ) {
                $('header').addClass('open');
                $('header').slideDown(200);
            } else if ( $(this).scrollTop() <= 600 ) {
                $('header').removeClass('open');
                $('header').slideUp(200);
            }
        });
    </script>
@endpush



