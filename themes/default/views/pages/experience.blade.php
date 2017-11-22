@extends("Theme::layouts.auth")

@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
<main>
    <section>
        <v-parallax height="600" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}">
            <v-toolbar class="elevation-0 transparent sticky" dark>
                <a href=""><img src="{{ assets('frontier/images/public/exph_logo.png') }}" alt="" width="150"></a>
                <v-spacer></v-spacer>
                <div class="hidden-sm-and-down">
                    <v-btn flat>{{ __('Experience') }}</v-btn>
                    <v-btn flat>{{ __('Roadtrip') }}</v-btn>
                    <v-btn flat>{{ __('Pack and Go') }}</v-btn>
                    <v-btn flat>{{ __('Stories') }}</v-btn>

                    <v-btn flat>{{ __('Login') }}</v-btn>
                    <v-btn flat>{{ __('Register') }}</v-btn>
                </div>
            </v-toolbar>
            <v-layout
                column
                align-center
                justify-center
                class="white--text"
                >
                <h1 class="mb-2 display-3 text-xs-center">{{ __("YOURS TO EXPLORE") }}</h1>
                <div class="display-1 mb-3 text-xs-center">{{ __("Let's go travel differently.") }}</div>
                <v-card-text>
                    <v-flex lg6 offset-lg3 md8 offset-md2 sm12 xs12>
                        {{-- <v-text-field
                            style="max-height: 50px;"
                            light solo hide-details single-line
                            label="Search by destination or activity"
                        ></v-text-field> --}}
                        <v-select
                            v-bind:items="states"
                            v-model="a1"
                            label="Search by destination or activity"
                            style="max-height: 50px;"
                            {{-- append-icon="close" --}}
                            light solo hide-details single-line
                            autocomplete
                        ></v-select>
                    </v-flex>
                </v-card-text>
            </v-layout>
        </v-parallax>
        <v-card-text class="white elevation-1 text-xs-center">
            <v-layout row wrap>
                <v-flex md4>
                    <v-avatar><v-icon class="info--text">place</v-icon></v-avatar> TBA
                </v-flex>
                <v-flex md4>
                    <v-avatar><v-icon class="info--text">place</v-icon></v-avatar> TBA
                </v-flex>
                <v-flex md4>
                    <v-avatar><v-icon class="info--text">place</v-icon></v-avatar> TBA
                </v-flex>
            </v-layout>
        </v-card-text>
    </section>
</main>

<section id="hotlist" class="my-5">
    <v-container fluid grid-list-lg>
        <v-layout row wrap class="py-5">
            <v-flex lg8 offset-lg2 md12 sm12 xs12>
                <v-card-text class="text-xs-center my-3">
                    <h2 class="title">{{ __("CURATED EXPERIENCES") }}</h2>
                </v-card-text>
                <v-layout row wrap align-center>
                    <v-flex xs12 sm6 md3>
                        <a href="" ripple class="no-decoration">
                            <v-card class="elevation-1">
                                <v-card-media height="150px" src="{{ assets('frontier/images/placeholder/b_4.png') }}" class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1">₱ 6,000</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">FULL MOON PARTY Luna Sea: A Random Full Moon Party #4 </span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">local_offer</v-icon>
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
                    </v-flex>
                    <v-flex xs12 sm6 md3>
                        <a href="" ripple class="no-decoration">
                            <v-card class="elevation-1">
                                <v-card-media height="150px" src="{{ assets('frontier/images/placeholder/b_4.png') }}" class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1">₱ 6,000</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">Retro Road Trip #2 </span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">local_offer</v-icon>
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
                    </v-flex>
                    <v-flex xs12 sm6 md3>
                        <a href="" ripple class="no-decoration">
                            <v-card class="elevation-1">
                                <v-card-media height="150px" src="{{ assets('frontier/images/placeholder/b_4.png') }}" class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1">₱ 6,000</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">Super Mega Awesome Random Road Trip #3</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">local_offer</v-icon>
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
                    </v-flex>
                    <v-flex xs12 sm6 md3>
                        <a href="" ripple class="no-decoration">
                            <v-card class="elevation-1">
                                <v-card-media height="150px" src="{{ assets('frontier/images/placeholder/b_4.png') }}" class="grey lighten-4">
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout column>
                                            <v-spacer></v-spacer>
                                            <v-card-actions>
                                            <v-spacer></v-spacer>
                                            <v-card-text class="pa-0 white--text title text-xs-right">
                                                <v-chip label class="ma-0 white--text deep-orange darken-1">₱ 6,000</v-chip>
                                            </v-card-text>
                                            </v-card-actions>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                                <v-divider class="grey lighten-3"></v-divider>
                                <v-toolbar card dense class="transparent pt-2">
                                    <v-toolbar-title class="mr-3 subheading">
                                        <span class="body-2">Pet Road Trip #1</span><br>
                                        <span class="caption">October 21-22</span><br>
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text class="grey--text pt-4">
                                    <v-icon class="subheading grey--text text--lighten-1 pb-1">local_offer</v-icon>
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
                    </v-flex>
                </v-layout>
                <v-card-text class="text-xs-center">
                    <v-btn outline large class="deep-orange--text text--lighten-1">
                        <v-icon left>place</v-icon> View All Experience
                    </v-btn>
                </v-card-text>
            </v-flex>
        </v-layout>
    </v-container>
</section>

<section id="testimonial" class="my-5" style="background: #ffffff;">
    <v-container fluid grid-list-lg>
        <v-layout row wrap class="py-5">
            <v-flex lg8 offset-lg2 md12 sm12 xs12>
                <v-card-text class="text-xs-center my-3">
                    <h2 class="title">{{ __("TESTIMONIAL") }}</h2>
                </v-card-text>
                <v-layout row wrap align-center>
                    <v-flex md6>
                        <v-parallax height="300" src="{{ assets('frontier/images/placeholder/gradient.png') }}" class="grey lighten-4">
                            <v-layout
                                column
                                align-center
                                justify-center
                                class="white--text"
                                >
                                <v-icon class="display-3 white--text">play_circle_outline</v-icon>
                            </v-layout>
                        </v-parallax>
                    </v-flex>
                    <v-flex md6>
                        <v-carousel hide-delimiters hide-controls class="elevation-0">
                            <v-carousel-item>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </v-carousel-item>
                            <v-carousel-item>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</v-carousel-item>
                            <v-carousel-item>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. 1</v-carousel-item>
                        </v-carousel>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>
</section>

<section id="partnership" class="my-5">
    <v-container fluid>
        <v-layout row wrap class="py-5" align-center>
            <v-flex md8 xs12 offset-md2>
                <v-flex xs12 class="my-3">
                    <div class="text-xs-center">
                        <h2 class="title">{{ __("CORPORATE PARTNERSHIPS") }}</h2>
                    </div>
                </v-flex>
                <v-flex xs12>
                    <v-container grid-list-lg>
                        <v-layout row wrap align-center v-touch="">
                            <v-flex xs12 md3>
                                <v-card-text>
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="180">
                                </v-card-text>
                            </v-flex>
                            <v-flex xs12 md3>
                                <v-card-text>
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="180">
                                </v-card-text>
                            </v-flex>
                            <v-flex xs12 md3>
                                <v-card-text>
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="180">
                                </v-card-text>
                            </v-flex>
                            <v-flex xs12 md3>
                                <v-card-text>
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="180">
                                </v-card-text>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-flex>
            </v-flex>
        </v-layout>
    </v-container>
</section>

<section id="cta" clas="my-5" style="background: #ffffff;">
    <v-container fluid>
        <v-layout column wrap class="py-5" align-center>
            <v-flex xs12>
                <v-container grid-list-lg>
                    <v-layout row wrap align-center>
                        <v-flex xs12>
                            <v-card class="elevation-0">
                                <v-card-text>
                                    <v-btn outline class="deep-orange--text">
                                        Book Now
                                    </v-btn>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-flex>
        </v-layout>
    </v-container>
</section>


<footer class="grey">
    <v-container fluid>
        <v-flex xs12>
            <v-container grid-list-lg>
                <v-layout row wrap align-center v-touch="">
                    <v-flex xs12 md3>
                        Copyright
                    </v-flex>
                    <v-flex xs12 md6>
                        <v-layout row wrap>
                            <v-flex xs12 md4>
                                1
                            </v-flex>
                            <v-flex xs12 md4>
                                2
                            </v-flex>
                            <v-flex xs12 md4>
                                3
                            </v-flex>
                        </v-layout>
                    </v-flex>
                    <v-flex xs12 md3>
                        Payment
                    </v-flex>
                </v-layout>
            </v-container>
        </v-flex>
    </v-container>
</footer>
@endsection

@push('css')
    <style>
        .no-decoration {
            text-decoration: none;
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
                    a1: null,
                    states: [
                        'Alabama','Alaska','American Samoa','Arizona',
                        'Arkansas','California','Colorado','Connecticut',
                        'Delaware','District of Columbia','Federated States of Micronesia',
                        'Florida','Georgia','Guam','Hawaii','Idaho',
                        'Illinois','Indiana','Iowa','Kansas','Kentucky',
                        'Louisiana','Maine','Marshall Islands','Maryland',
                        'Massachusetts','Michigan','Minnesota','Mississippi',
                        'Missouri','Montana','Nebraska','Nevada',
                        'New Hampshire','New Jersey','New Mexico','New York',
                        'North Carolina','North Dakota','Northern Mariana Islands','Ohio',
                        'Oklahoma','Oregon','Palau','Pennsylvania','Puerto Rico',
                        'Rhode Island','South Carolina','South Dakota','Tennessee',
                        'Texas','Utah','Vermont','Virgin Island','Virginia',
                        'Washington','West Virginia','Wisconsin','Wyoming'
                    ],
                    items: [
                        {
                            testi: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                        },
                        {
                            testi: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                        },
                        {
                            testi: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                        },
                        {
                            testi: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
                        }
                    ]
                }
            },
        });
    </script>
@endpush
