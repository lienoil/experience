@extends("Theme::layouts.auth")

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Public::sections.nav")
        </v-toolbar>
    </v-card>

    <v-card class="banner elevation-1">
        <v-parallax class="elevation-0" height="450" src="{{ assets('frontier/images/public/car.jpg') }}">
            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.4); position: absolute; width: 100%; height: 100%;"></div>
            <v-layout column align-center justify-center class="white--text">
                <v-card dark class="elevation-0 transparent">
                    <h2 class="mb-2 text-xs-center"><strong>{{ __("MEET THE TEAM") }}</strong></h2>
                    <h5 class="mb-3 text-xs-center fw-500">{{__("Lorem Ipsum Dolor Cit Amet")}}</h5>
            </v-layout>
        </v-parallax>
    </v-card>

    <section class="py-5">
        <v-container fluid>
            <v-layout row wrap align-center justify-center>
                <v-flex lg10 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("TRAVEL MANAGERS") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">
                            {{ __("Check out the loveable and crazy bunch of Travel Managers of Experience Philippines.") }}
                        </h2>
                    </v-card-text>

                    {{-- founders --}}
                    <v-layout row wrap align-top justify-center>
                        <v-flex md3 xs12>
                            <v-card class="elevation-1">
                                <v-card-media src="{{ assets('frontier/images/public/car.jpg') }}" height="400px"></v-card-media>
                            </v-card>
                        </v-flex>
                        <v-flex md3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-text>
                                    <div class="title mb-1">Giancarlo G.</div>
                                    <p class="body-2 red--text text--lighten-1">Founder</p>
                                    Gian is the founder of Experience Philippines. One of his impeccable skills is being able to strike a conversation with any traveller along the way because of his warm personality and endless curiosity. He can easily be bribed with milk tea 25% sweetness level, less ice.. you can add pearl toppings na rin.
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex md3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-media src="{{ assets('frontier/images/public/car.jpg') }}" height="400px"></v-card-media>
                            </v-card>
                        </v-flex>
                        <v-flex md3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-text>dfdfdf</v-card-text>
                            </v-card>
                        </v-flex>
                    </v-layout>
                    {{-- tm --}}
                    <v-layout row wrap align-top justify-center>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-text>dfdfdf</v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-media src="{{ assets('frontier/images/public/car.jpg') }}" height="200px"></v-card-media>
                            </v-card>
                        </v-flex>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-text>dfdfdf</v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-media src="{{ assets('frontier/images/public/car.jpg') }}" height="200px"></v-card-media>
                            </v-card>
                        </v-flex>
                    </v-layout>
                    {{-- tm --}}
                    <v-layout row wrap align-top justify-center>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-media src="{{ assets('frontier/images/public/car.jpg') }}" height="200px"></v-card-media>
                            </v-card>
                        </v-flex>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-text>dfdfdf</v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-media src="{{ assets('frontier/images/public/car.jpg') }}" height="200px"></v-card-media>
                            </v-card>
                        </v-flex>
                        <v-flex sm3 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-text>dfdfdf</v-card-text>
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
    <link rel="stylesheet" href="{{ assets('frontier/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ assets('frontier/slick/slick/slick-theme.css') }}">
    <style>
        /* slickslider */
        .ssl-1 {  /* ._e296pg */
            position: relative;
        }
        .ssl-2 { /* _11iocrd2 */
            margin-left: -8px !important;
            margin-right: -8px !important;
            /*overflow: hidden !important;*/
            /*overflow-y: hidden !important;*/
        }
        .ssl-3 { /* _1ob6ca33 */
            /*margin-bottom: 0px !important;*/
            padding: 0px !important;
            overflow: visible !important;
        }
        .ssl-4 { /* _1yttouf2 */
            /*display: inline-block !important;*/
            vertical-align: top !important;
            white-space: normal !important;
        }
        .ssl-5 { /* _qgh1p4 */
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .slider {
            height: 100%;
        }
        .slick-slide {
            /*margin: 8px 16px 8px 0;*/
        }
        .slick-slide img {
            width: 100%;
        }
        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
        .slick-slide {
            transition: all ease-in-out .3s;
        }
        .slick-next {
            background: #fff !important;
            right: -10px;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            box-shadow: 0 1px 3px rgba(0,0,0,.2),0 1px 1px rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12)!important;
        }
        .slick-prev {
            background: #fff !important;
            left: -10px;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            z-index: 1;
            box-shadow: 0 1px 3px rgba(0,0,0,.2),0 1px 1px rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12)!important;
        }
        /* slickslider */
        .calendar {
            width: 100%;
        }
        .calendar .picker__body {
            margin-left: 0;
        }
        .calendar .picker--date__table table {
            width: 100%;
        }
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
            background: rgba(0, 0, 0, 0.7);
            /*background: linear-gradient(to top, rgba(0,0,0,0.65), transparent 100%);*/
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

        .content:hover .content-title {
            opacity: 0;
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

        .fadeIn-top {
            top: 20%;
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
                    exp: [
                        {
                            title: 'FULL MOON PARTY Luna Sea: A Random Full Moon Party #4',
                            price: '₱ 6,000',
                            category: 'Retro Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/placeholder/windmill.jpg') }}'
                        },
                        {
                            title: 'Retro Road Trip #2',
                            price: '₱ 10,000',
                            category: 'Singles Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/placeholder/red2.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/placeholder/city.png') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 4,000',
                            category: 'Special Road Trip',
                            date: 'July 11-13',
                            src: '{{ assets('frontier/images/placeholder/9.png') }}'
                        },
                         {
                            title: 'FULL MOON PARTY Luna Sea: A Random Full Moon Party #4',
                            price: '₱ 6,000',
                            category: 'Retro Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/placeholder/windmill.jpg') }}'
                        },
                        {
                            title: 'Retro Road Trip #2',
                            price: '₱ 10,000',
                            category: 'Singles Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/placeholder/red2.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/placeholder/city.png') }}'
                        },
                    ],
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
