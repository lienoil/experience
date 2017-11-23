@extends("Theme::layouts.admin")

@section("head-title", __("Test"))

@section("content")
    @include("Frontier::partials.banner")
    <v-parallax height="650" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}" class="hero elevation-1">
        <v-toolbar class="elevation-0 transparent sticky" dark>
            <v-toolbar-title>Experience</v-toolbar-title>
            <v-btn flat>Experience</v-btn>

            <v-spacer></v-spacer>
            <v-btn flat>Login</v-btn>
            <v-btn flat>Register</v-btn>
        </v-toolbar>
            <v-layout row wrap align-center align-center justify-center>
                <v-flex lg6 md10>
                    <v-card-text class="text-xs-center">
                        <div class="pb-4">
                            <div class="display-2 pb-2">YOURS TO EXPLORE</div>
                            <div class="title">Discover and book amazing things to do at exclusive prices</div>
                        </div>
                        <v-text-field
                            append-icon="close"
                            light solo hide-details single-line
                            label="Search"
                        ></v-text-field>
                    </v-card-text>
                </v-flex>
            </v-layout>
    </v-parallax>

    <v-container fluid grid-list-lg>
        <v-card class="elevation-1">
            <div class="responsive">
                <div>your content</div>
                <div>your content</div>
                <div>your content</div>
            </div>
        </v-card>

    </v-container>

    <v-container fluid grid-list-lg>
        <v-card class="elevation-1">
            <v-card-text>
                <v-text-field
                    append-icon="close"
                    light solo hide-details single-line
                    label="Search"
                ></v-text-field>
            </v-card-text>
        </v-card>
    </v-container>
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>
    <style>
        .no-decoration {
            text-decoration: none;
        }
        .hero-search .input-group.input-group--solo {
            min-height: 55px !important;
        }
        .fw-400 {
            font-weight: 400;
        }
        #hero .parallax__content {
            padding: 0;
        }
        #video .parallax__content {
            padding: 0;
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
                    //
                }
            },
        });
    </script>
@endpush

@push('js')
     <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.responsive').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
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
