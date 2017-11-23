@extends("Theme::layouts.auth")

@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
<main>
    <section id="hero">
        <v-parallax height="600" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}">
            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.30); position: absolute; width: 100%; height: 100%;"></div>
            <v-toolbar class="elevation-0 transparent sticky" dark>
                <a href="">
                    <img class="pt-5" src="{{ assets('frontier/images/public/exph_logo.png') }}" alt="" width="100%">
                </a>
                <v-spacer></v-spacer>
                <div class="hidden-sm-and-down">
                    <v-btn small flat>{{ __('Experience') }}</v-btn>
                    <v-btn small flat>{{ __('Roadtrip') }}</v-btn>
                    <v-btn small flat>{{ __('Pack and Go') }}</v-btn>
                    <v-btn small flat>{{ __('Stories') }}</v-btn>
                    <v-btn small flat>{{ __('Login') }}</v-btn>
                    <v-btn small flat>{{ __('Register') }}</v-btn>
                </div>
            </v-toolbar>
            <v-layout
                column
                align-center
                justify-center
                class="white--text"
                >
                <v-card dark class="elevation-0 transparent">
                    <h1 class="mb-2 display-1 text-xs-center"><strong>{{ __("WHAT DO YOU WANT TO EXPERIENCE?") }}</strong></h1>
                    <div class="headline mb-3 text-xs-center">{{ __("Let's Go Travel Differently.") }}</div>
                    <v-card-text>
                        <v-flex xs12 class="hero-search">
                            <v-select
                                v-bind:items="states"
                                v-model="search"
                                label="Search by destination or activity"
                                {{-- append-icon="close" --}}
                                light solo hide-details single-line
                                autocomplete
                            ></v-select>
                        </v-flex>
                    </v-card-text>
                </v-card>
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

<div class="py-5">
    <section id="categories">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("POPULAR ROAD TRIPS") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</h2>
                    </v-card-text>
                    <v-layout row wrap align-center>
                        <v-flex xs12
                            v-bind="{ [`sm${card.flex}`]: true }"
                            v-for="card in stories"
                            :key="card.title"
                            >
                            <a href="" ripple class="no-decoration">
                                <v-card class="elevation-1">
                                    <v-card-media
                                        :src="card.src"
                                        height="250px"
                                        >
                                        <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.40); position: absolute; width: 100%; height: 100%;"></div>
                                        <v-container fill-height fluid class="pa-0 white--text">
                                            <v-layout row wrap align-center justify-center>
                                            <v-card class="elevation-0 transparent text-xs-center">
                                                <h4 class="white--text text-xs-center" v-html="card.title"></h4>
                                            </v-card>
                                            </v-layout>
                                        </v-container>
                                    </v-card-media>
                                </v-card>
                            </a>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    <section id="hotlist">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("CURATED EXPERIENCES") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</h2>
                    </v-card-text>
                    <v-layout row wrap align-center>
                        <v-flex xs12 sm6 md3 v-for="card in exp">
                            <a href="" ripple class="no-decoration">
                                <v-card class="elevation-1">
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
                            <v-icon left>place</v-icon> View All Experiences
                        </v-btn>
                    </v-card-text>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    <section id="recommended">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("EXPERIENCE RECOMMENDED") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</h2>
                    </v-card-text>
                    <v-layout row wrap align-center>
                        <v-flex xs12 sm6 md3 v-for="card in exp">
                            <a href="" ripple class="no-decoration">
                                <v-card class="elevation-1">
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
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    <section id="video">
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap align-center>
                    <v-flex xs12>
                        <v-parallax class="mb-4 mt-5" height="450" src="https://placeimg.com/2880/1799/nature/1">
                            <v-layout
                                column
                                align-center
                                justify-center
                                class="white--text"
                                >
                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.40); position: absolute; width: 100%; height: 100%;"></div>
                                <v-card dark class="elevation-0 transparent text-xs-center">
                                    <v-card-text>
                                        <h3><strong>{{ __("EXPERIENCE PHILIPPINES ROAD TRIPS") }}</strong></h3>
                                        <h6 class="fw-400">Random Road Trips where the destination is a SECRET <br> and the activities are always a SURPRISE</h6>
                                        <a class="no-decoration" href="">
                                            <v-icon class="display-3 white--text">play_circle_filled</v-icon>
                                        </a>
                                    </v-card-text>
                                </v-card>
                            </v-layout>
                        </v-parallax>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </section>

    <section id="stories">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("STORIES FROM THE ROAD") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</h2>
                    </v-card-text>
                    <v-layout row wrap>
                        <v-flex sm6 xs12>
                            <v-layout row wrap>
                                <v-flex xs12>
                                    <v-layout row wrap>
                                        <v-flex xs12>
                                            <v-card class="elevation-1">
                                                <v-card-media
                                                    src="{{ assets('frontier/images/public/s2.jpg') }}"
                                                    height="200px"
                                                    >
                                                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.20); position: absolute; width: 100%; height: 100%;"></div>
                                                    <v-container fill-height fluid class="pa-0 white--text">
                                                        <v-layout row wrap align-end justify-left>
                                                        <v-card dark class="elevation-0 transparent">
                                                            <v-card-text class="py-3 px-4 white--textbody-2">
                                                            <div class="body-2">Road Tripper Monday: Jen Medrano</div>
                                                            <div class="caption">November 13, 2017</div>
                                                            <div class="caption">by El Joy beneza</div>
                                                        </v-card-text>
                                                        </v-card>
                                                        </v-layout>
                                                    </v-container>
                                                </v-card-media>
                                            </v-card>
                                        </v-flex>
                                    </v-layout>
                                    <v-layout row wrap>
                                        <v-flex sm6 xs12>
                                            <v-card class="elevation-1">
                                                <v-card-media
                                                    src="{{ assets('frontier/images/public/s3.jpg') }}"
                                                    height="200px"
                                                    >
                                                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.20); position: absolute; width: 100%; height: 100%;"></div>
                                                    <v-container fill-height fluid class="pa-0 white--text">
                                                        <v-layout row wrap align-end justify-left>
                                                            <v-card dark class="elevation-0 transparent">
                                                                <v-card-text class="py-3 px-4 white--textbody-2">
                                                                <div class="body-2">Road Tripper Monday: Don Davis Pido</div>
                                                                <div class="caption">October 16, 2017</div>
                                                                <div class="caption">by El Joy beneza</div>
                                                            </v-card-text>
                                                            </v-card>
                                                        </v-layout>
                                                    </v-container>
                                                </v-card-media>
                                            </v-card>
                                        </v-flex>
                                        <v-flex sm6 xs12>
                                            <v-card class="elevation-1">
                                                <v-card-media
                                                    src="{{ assets('frontier/images/public/s4.jpg') }}"
                                                    height="200px"
                                                    >
                                                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.20); position: absolute; width: 100%; height: 100%;"></div>
                                                    <v-container fill-height fluid class="pa-0 white--text">
                                                        <v-layout row wrap align-end justify-left>
                                                            <v-card dark class="elevation-0 transparent">
                                                                <v-card-text class="py-3 px-4 white--textbody-2">
                                                                <div class="body-2">Road Tripper Monday: Alanna Tan</div>
                                                                <div class="caption">August 7, 2017</div>
                                                                <div class="caption">by El Joy beneza</div>
                                                            </v-card-text>
                                                            </v-card>
                                                        </v-layout>
                                                    </v-container>
                                                </v-card-media>
                                            </v-card>
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-flex sm6 xs12>
                            <v-card class="elevation-1" height="100%">
                                <v-card-media
                                    src="{{ assets('frontier/images/public/s1.jpg') }}"
                                    height="100%"
                                    style="min-height: 200px;"
                                    >
                                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.20); position: absolute; width: 100%; height: 100%;"></div>
                                    <v-container fill-height fluid class="pa-0 white--text">
                                        <v-layout row wrap align-end justify-left>
                                            <v-card dark class="elevation-0 transparent">
                                                <v-card-text class="py-3 px-4 white--textbody-2">
                                                <div class="body-2">Road Tripper Monday: Kevin Cheung</div>
                                                <div class="caption">October 9, 2017</div>
                                                <div class="caption">by El Joy beneza</div>
                                            </v-card-text>
                                            </v-card>
                                        </v-layout>
                                    </v-container>
                                </v-card-media>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    <section id="testimonial">
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap align-center>
                    <v-flex xs12>
                        <v-parallax class="mb-4 mt-5" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}">
                            <v-layout
                                column
                                align-center
                                justify-center
                                class="white--text"
                                >
                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.40); position: absolute; width: 100%; height: 100%;"></div>
                                <v-card dark class="elevation-0 transparent text-xs-center">
                                    <v-card-text>
                                        <h5 class="mb-2"><strong>{{ __("Happy Customers") }}</strong></h5>
                                        <p class="fw-400">Checkout our best promotion tours</p>
                                        <v-layout row wrap>
                                            <v-flex lg4 offset-lg4 md8 offset-md2 sm12 xs12>
                                                    <div class="subheading mb-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eaque explicabo recusandae blanditiis. Nostrum quidem blanditiis commodi ipsum magnam eaque magni, enim repudiandae quam ut totam alias maxime accusantium. Provident!</div>

                                                    <v-avatar class="mb-3">
                                                        <img src="https://placeimg.com/1280/480/people/1" alt="">
                                                    </v-avatar>

                                                    <div class="subheading">Jane Appleseed</div>
                                                    <div class="body-1">Facebook Messanger</div>

                                                    <v-avatar dark icon class="mt-5">
                                                        <v-icon class="white--text caption">fiber_manual_record</v-icon>
                                                        <v-icon class="white--text caption">fiber_manual_record</v-icon>
                                                        <v-icon class="white--text caption">fiber_manual_record</v-icon>
                                                    </v-avatar>
                                            </v-flex>
                                        </v-layout>
                                    </v-card-text>
                                </v-card>
                            </v-layout>
                        </v-parallax>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </section>

    <section id="partnership">
        <v-container fluid>
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("PARTNERSHIPS") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</h2>
                    </v-card-text>
                    <v-layout row wrap>
                        <v-flex sm4 xs12>
                            <v-card-text>
                                <img src="{{ assets('frontier/images/public/exph.png') }}" width="100%" alt="">
                            </v-card-text>
                        </v-flex>
                        <v-flex sm4 xs12>
                            <v-card-text>
                                <img src="{{ assets('frontier/images/public/exph.png') }}" width="100%" alt="">
                            </v-card-text>
                        </v-flex>
                        <v-flex sm4 xs12>
                            <v-card-text>
                                <img src="{{ assets('frontier/images/public/exph.png') }}" width="100%" alt="">
                            </v-card-text>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </section>
</div>
<section id="cta">
    <v-layout row wrap>
        <v-flex xs12>
            <v-parallax height="300" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}">
                <v-layout
                    column
                    align-center
                    justify-center
                    class="white--text"
                    >
                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.40); position: absolute; width: 100%; height: 100%;"></div>
                    <v-card class="elevation-0 transparent">
                        <v-flex xs12>
                            <v-layout row wrap>
                                <v-flex md5 xs12>
                                    <v-card-text>
                                        <v-menu
                                            lazy
                                            :close-on-content-click="false"
                                            v-model="menu"
                                            transition="scale-transition"
                                            right
                                            bottom
                                            full-width
                                            max-width="290px"
                                            min-width="290px"
                                            >
                                            <v-text-field
                                                slot="activator"
                                                append-icon="date_range"
                                                light solo hide-details single-line
                                                placeholder="From"
                                                v-model="schedule"
                                                readonly
                                            ></v-text-field>
                                            <v-date-picker v-model="to" no-title scrollable actions>
                                            </v-date-picker>
                                        </v-menu>
                                    </v-card-text>
                                </v-flex>
                                <v-flex md5 xs12>
                                    <v-card-text>
                                        <v-menu
                                            lazy
                                            :close-on-content-click="false"
                                            v-model="from"
                                            transition="scale-transition"
                                            right
                                            bottom
                                            full-width
                                            max-width="290px"
                                            min-width="290px"
                                            >
                                            <v-text-field
                                                slot="activator"
                                                append-icon="date_range"
                                                light solo hide-details single-line
                                                placeholder="To"
                                                v-model="schedule"
                                                readonly
                                            ></v-text-field>
                                            <v-date-picker v-model="from" no-title scrollable actions>
                                            </v-date-picker>
                                        </v-menu>
                                    </v-card-text>
                                </v-flex>
                                <v-flex md2 xs12>
                                    <v-card-text class="text-xs-center">
                                        <v-btn large flat round dark class="deep-orange lighten-1">Book Now</v-btn>
                                    </v-card-text>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                    </v-card>
                </v-layout>
            </v-parallax>
        </v-flex>
    </v-layout>
</section>

@endsection

@push('css')
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
                    from: null,
                    to: null,
                    schedule: null,
                    menu: false,
                    menu: false,
                    search: null,
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
                    stories: [
                        { title: '2017 SCHEDULE', src: 'https://placeimg.com/1280/480/nature/1', flex: 8, height: '100%' },
                        { title: 'SPECIAL', src: 'https://placeimg.com/640/480/nature/2', flex: 4 },
                        { title: 'SINGLES', src: 'https://placeimg.com/640/480/nature/3', flex: 3},
                        { title: 'EAT AND EXPLORE', src: 'https://placeimg.com/1280/480/nature/4', flex: 6},
                        { title: 'RETRO', src: 'https://placeimg.com/640/480/nature/5', flex: 3},
                    ],
                    exp: [
                        {
                            title: 'FULL MOON PARTY Luna Sea: A Random Full Moon Party #4',
                            price: '₱ 6,000',
                            src: 'https://placeimg.com/640/480/nature/5'
                        },
                        {
                            title: 'Retro Road Trip #2',
                            price: '₱ 6,000',
                            src: 'https://placeimg.com/640/480/nature/6'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 6,000',
                            src: 'https://placeimg.com/640/480/nature/7'
                        },
                        {
                            title: 'Pet Road Trip #1',
                            price: '₱ 6,000',
                            src: 'https://placeimg.com/640/480/nature/18'
                        }
                    ],
                }
            },
        });
    </script>
@endpush
