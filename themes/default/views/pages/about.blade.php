@extends("Theme::layouts.auth")

@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Public::sections.nav")
        </v-toolbar>
    </v-card>

    <v-card class="elevation-1 hero">
        <v-parallax src="{{ assets('frontier/images/placeholder/9.png') }}" height="450">
            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
            <v-layout column align-center justify-center class="white--text">
                <v-card dark class="elevation-0 transparent">
                    <h2 class="mb-2 text-xs-center"><strong>{{ __("WHO WE ARE") }}</strong></h2>
                    <h5 class="mb-3 text-xs-center fw-500">{{__("Let's Go Travel Differently")}}</h5>
            </v-layout>
        </v-parallax>
        <v-card-text class="pa-2 white">
            <v-layout wrap justify-space-around align-center>
                <v-list class="text-xs-center">
                    <div class="headline primary--text text--darken-2">465</div>
                    <div class="mt-2 caption">Happy Travellers</div>
                </v-list>
                <v-list class="text-xs-center">
                    <div class="headline primary--text text--darken-2">125</div>
                    <div class="mt-2 caption">Amazing Experiences</div>
                </v-list>
                <v-list class="text-xs-center">
                    <div class="headline primary--text text--darken-2">19, 172</div>
                    <div class="mt-2 caption">Die Hard Fans</div>
                </v-list>
                <v-list class="text-xs-center">
                    <div class="headline primary--text text--darken-2">130</div>
                    <div class="mt-2 caption">Destinations Explored</div>
                </v-list>
            </v-layout>
        </v-card-text>
    </v-card>

    <v-container fluid grid-list-lg>
        <v-layout row wrap justify-center align-top>
            <v-flex md10 xs12>
                <v-card-text class="text-xs-center my-3">
                    <h2 class="display-1">{{ __("CHECK OUT OUR WILD ADVENTURES") }}</h2>
                    <h2 class="subheading grey--text text--darken-1">
                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                    </h2>
                </v-card-text>

                <v-card-text class="text-xs-center my-3">
                    <h2 class="display-1">{{ __("OUR MISSION AND VISION") }}</h2>
                    <h2 class="subheading grey--text text--darken-1">
                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                    </h2>
                </v-card-text>

                <v-layout row wrap>
                    <v-flex md4 xs12>
                        <v-card class="elevation-1" height="100%">
                            <v-toolbar class="elevation-0 transparent"></v-toolbar>
                            <v-card class="elevation-0 transparent text-xs-center review--flex">
                                <v-avatar size="60px" class="cyan lighten-1 rounded">
                                    <v-icon class="white--text">star</v-icon>
                                </v-avatar>
                            </v-card>

                            <v-card-text class="text-xs-center">
                                <p class="title">Experience Local</p>
                                <div>Our trips are all about local experiences. We just do not see beautiful sites but we learn for them.</div>
                            </v-card-text>
                        </v-card>
                    </v-flex>

                    <v-flex md4 xs12>
                        <v-card class="elevation-1" height="100%">
                            <v-toolbar class="elevation-0 transparent"></v-toolbar>
                            <v-card class="elevation-0 transparent text-xs-center review--flex">
                                <v-avatar size="60px" class="cyan lighten-1 rounded">
                                    <v-icon class="white--text">fa fa-globe</v-icon>
                                </v-avatar>
                            </v-card>

                            <v-card-text class="text-xs-center">
                                <p class="title">Philippine Class Service</p>
                                <div>In the Philippines, we put great importance in hospitality. Our road trips  are always cheerful and with a smile.</div>
                            </v-card-text>
                        </v-card>
                    </v-flex>

                    <v-flex md4 xs12>
                        <v-card class="elevation-1" height="100%">
                            <v-toolbar class="elevation-0 transparent"></v-toolbar>
                            <v-card class="elevation-0 transparent text-xs-center review--flex">
                                <v-avatar size="60px" class="cyan lighten-1 rounded">
                                    <v-icon class="white--text">thumb_up</v-icon>
                                </v-avatar>
                            </v-card>

                            <v-card-text class="text-xs-center">
                                <p class="title">Best Price Guarantee</p>
                                <div>We provide the best value for money for Philippine budget travel.</div>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>


    @include("Public::sections.footer")
@endsection

@push('css')
    <link rel="stylesheet" href="{{ assets('frontier/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ assets('frontier/slick/slick/slick-theme.css') }}">
    <style>
        .hero .parallax__content {
            padding: 0;
        }

        .review--flex {
            margin-top: -100px;
        }

        .rounded {
            border-radius: 50% !important;
        }

        .fw-400 {
            font-weight: 400;
        }
        .fw-500 {
            font-weight: 500;
        }
        .block {
            display: block !important;
        }
        .c-lift {
            transition: all .2s ease;
        }
        .c-lift:hover {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
            box-shadow: 0 1px 8px rgba(0,0,0,.2),0 3px 4px rgba(0,0,0,.14),0 3px 3px -2px rgba(0,0,0,.12) !important;
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
                    menu: false,
                    search: null,
                }
            },
        });
    </script>
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ assets('frontier/slick/slick/slick.js') }}"></script>
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
        $(document).on('ready', function() {
            $(".regular").slick({
                dots: false,
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush

