@extends("Theme::layouts.admin")

@section("head-title", __("Test"))

@section("content")
    @include("Frontier::partials.banner")
    <v-container fluid grid-list-lg>
        <v-layout row wrap>
            <v-flex xs12>
                <section class="regular slider my-2">
                    <div class="my-2">
                        <a href="" ripple class="td-n">
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src=""
                                    class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="">$$$</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">sdsds</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">whatshot</v-icon>
                                    <span class="caption">RETRO ROAD TRIP</span>
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
                    </div>
                    <div class="my-2">
                        <a href="" ripple class="td-n">
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src="{{ assets('frontier/images/public/h7.jpg') }}"
                                    class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="">$$$</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">Random Road Trip</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">whatshot</v-icon>
                                    <span class="caption">RETRO ROAD TRIP</span>
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
                    </div>
                    <div class="my-2">
                        <a href="" ripple class="td-n">
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src="{{ assets('frontier/images/public/h8.jpg') }}"
                                    class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="">$$$</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">Luna Sea #23</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">whatshot</v-icon>
                                    <span class="caption">RETRO ROAD TRIP</span>
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
                    </div>
                    <div class="my-2">
                        <a href="" ripple class="td-n">
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src=""
                                    class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="">$$$</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">sdsds</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">whatshot</v-icon>
                                    <span class="caption">RETRO ROAD TRIP</span>
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
                    </div>
                    <div class="my-2">
                        <a href="" ripple class="td-n">
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src="{{ assets('frontier/images/public/h6.jpg') }}"
                                    class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="">$$$</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">sdsds</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">whatshot</v-icon>
                                    <span class="caption">RETRO ROAD TRIP</span>
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
                    </div>
                    <div class="my-2">
                        <a href="" ripple class="td-n">
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src=""
                                    class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="">$$$</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">sdsds</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">whatshot</v-icon>
                                    <span class="caption">RETRO ROAD TRIP</span>
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
                    </div>
                </section>
            </v-flex>
        </v-layout>
    </v-container>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ assets('frontier/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ assets('frontier/slick/slick/slick-theme.css') }}">
    <style>
        .slider {
            height: 100%;
        }
       /* * {
        box-sizing: border-box;
        }*/
        .slick-slide {
            margin: 0px 10px;
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
            /*opacity: 1;*/
        }

        .slick-active {
            /*opacity: 1;*/
        }
        .slick-current {
            /*opacity: 1;*/
        }

        .slick-arrow {

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
    </style>
@endpush

@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    stories: [
                        { title: '2017 SCHEDULE', src: '{{ assets('frontier/images/public/h7.jpg') }}', flex: 8, height: '100%' },
                        { title: 'SPECIAL', src: '{{ assets('frontier/images/public/h3.jpg') }}', flex: 4 },
                        { title: 'SINGLES', src: '{{ assets('frontier/images/public/v2.jpg') }}', flex: 3},
                        { title: 'EAT AND EXPLORE', src: '{{ assets('frontier/images/public/h1.jpg') }}', flex: 6},
                        { title: 'RETRO', src: '{{ assets('frontier/images/public/v1.jpg') }}', flex: 3},
                    ],
                };
            },

        });
    </script>
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ assets('frontier/slick/slick/slick.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            $(".regular").slick({
                dots: false,
                infinite: true,
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
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
            });
        });
    </script>
@endpush
