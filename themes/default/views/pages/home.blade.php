@extends("Theme::layouts.auth")

@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
<main>
    <section id="hero">
        <v-parallax height="600" src="{{ assets('frontier/images/public/h5.jpg') }}">
            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
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
            <v-layout column align-center justify-center class="white--text">
                <v-card dark class="elevation-0 transparent">
                    <h2 class="mb-2 text-xs-center"><strong>{{ __("LET'S GO TRAVEL DIFFERENTLY") }}</strong></h2>
                    <h5 class="mb-3 text-xs-center fw-500">Experience a different kind of adventure</h5>
                    <v-menu
                        offset-y
                        :close-on-content-click="false"
                        class="block"
                        v-model="search"
                        >
                        <v-select
                            autocomplete
                            label="What do you want to do or where do you want to go?"
                            slot="activator"
                            hide-details
                            append-icon=""
                            prepend-icon="search"
                            search-input
                            light solo hide-details>
                        </v-select>
                        <v-card class="pa-3" style="max-width: 777px !important;">
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
                <v-flex lg10 offset-lg1 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("POPULAR ROAD TRIPS") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                    </v-card-text>
                    <v-layout row wrap align-center>
                        <v-flex xs12
                            v-bind="{ [`sm${card.flex}`]: true }"
                            v-for="card in stories"
                            :key="card.title"
                            >
                            <a href="" ripple class="td-n">
                                <v-card class="elevation-1">
                                    <v-card-media
                                        :src="card.src"
                                        height="250px"
                                        >
                                        <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                                        <v-container fill-height fluid class="pa-0 white--text">
                                            <v-layout row wrap align-center justify-center>
                                            <v-card class="elevation-0 transparent text-xs-center">
                                                <h5 class="white--text text-xs-center"><strong>@{{ card.title }}</strong></h5>
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
                <v-flex lg10 offset-lg1 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("CURATED EXPERIENCES") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                    </v-card-text>
                    <v-layout row wrap align-center>
                        <v-flex xs12 sm6 md3 v-for="card in exp">
                            <a href="" ripple class="td-n">
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
                    <v-card-text class="text-xs-center">
                        <v-btn outline large class="deep-orange--text text--lighten-1">
                            <v-icon left>place</v-icon> {{ __('View All Experiences') }}
                        </v-btn>
                    </v-card-text>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    <section id="recommended">
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("EXPERIENCE RECOMMENDED") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                    </v-card-text>
                    <v-layout row wrap align-center>
                        <v-flex xs12 sm6 md3 v-for="card in reco">
                            <a href="" ripple class="td-n">
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
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    <section id="video">
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap align-center>
                    <v-flex xs12>
                        <v-parallax class="mb-4 mt-5" height="450" src="{{ assets('frontier/images/public/how_to_use.jpg') }}">
                            <v-layout
                                column
                                align-center
                                justify-center
                                class="white--text"
                                >
                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                                <v-card dark class="elevation-0 transparent text-xs-center">
                                    <v-card-text>
                                        <h3><strong>{{ __("EXPERIENCE PHILIPPINES ROAD TRIPS") }}</strong></h3>
                                        <h6 class="fw-400">Random Road Trips where the destination is a SECRET <br> and the activities are always a SURPRISE</h6>
                                        <a class="td-n" href="">
                                            <v-avatar v-tooltip:bottom="{ html: 'Click to watch the video' }">
                                                <v-icon class="display-3 white--text">play_circle_filled</v-icon>
                                            </v-avatar>
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
                <v-flex lg10 offset-lg1 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("STORIES FROM THE ROAD") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                    </v-card-text>
                    <v-layout row wrap>
                        <v-flex sm6 xs12>
                            <v-layout row wrap>
                                <v-flex xs12>
                                    <v-layout row wrap>
                                        <v-flex xs12>
                                            <a href="" class="td-n">
                                                <v-card class="elevation-1">
                                                    <v-card-media
                                                        src="{{ assets('frontier/images/public/s2.jpg') }}"
                                                        height="200px"
                                                        >
                                                        <div class="insert-overlay" style="background: rgba(33, 150, 243, 0.15); position: absolute; width: 100%; height: 100%;"></div>
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
                                            </a>
                                        </v-flex>
                                    </v-layout>
                                    <v-layout row wrap>
                                        <v-flex sm6 xs12>
                                            <a href="" class="td-n">
                                                <v-card class="elevation-1">
                                                    <v-card-media
                                                        src="{{ assets('frontier/images/public/s3.jpg') }}"
                                                        height="200px"
                                                        >
                                                        <div class="insert-overlay" style="background: rgba(33, 150, 243, 0.15); position: absolute; width: 100%; height: 100%;"></div>
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
                                            </a>
                                        </v-flex>
                                        <v-flex sm6 xs12>
                                            <a href="" class="td-n">
                                                <v-card class="elevation-1">
                                                    <v-card-media
                                                        src="{{ assets('frontier/images/public/s4.jpg') }}"
                                                        height="200px"
                                                        >
                                                        <div class="insert-overlay" style="background: rgba(33, 150, 243, 0.15); position: absolute; width: 100%; height: 100%;"></div>
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
                                            </a>
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                            </v-layout>
                        </v-flex>
                        <v-flex sm6 xs12>
                            <a href="" class="td-n">
                                <v-card class="elevation-1" height="100%">
                                    <v-card-media
                                        src="{{ assets('frontier/images/public/s1.jpg') }}"
                                        height="100%"
                                        style="min-height: 200px;"
                                        >
                                        <div class="insert-overlay" style="background: rgba(33, 150, 243, 0.15); position: absolute; width: 100%; height: 100%;"></div>
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
                            </a>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
    </section>

    {{-- <section id="testimonial">
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap align-center>
                    <v-flex xs12>
                        <v-parallax height="100%" class="mb-4 mt-5" src="{{ assets('frontier/images/placeholder/galaxy.jpg') }}">
                            <v-layout
                                column
                                align-center
                                justify-center
                                class="white--text"
                                >
                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                                <v-card dark class="py-4 elevation-0 transparent text-xs-center">
                                    <v-card-text>
                                        <h4 class="pb-0 mb-0"><strong>{{ __("Happy Customers") }}</strong></h4>
                                        <p class="fw-400">Checkout our best promotion tours</p>
                                        <v-layout row wrap>
                                            <v-flex lg4 offset-lg4 md8 offset-md2 sm12 xs12>
                                                <div class="subheading mb-5 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eaque explicabo recusandae blanditiis. Nostrum quidem blanditiis commodi ipsum magnam eaque magni, enim repudiandae quam ut totam alias maxime accusantium. Provident!</div>

                                                <v-avatar class="mb-3">
                                                    <img src="{{ assets('frontier/images/public/s4.jpg') }}" alt="">
                                                </v-avatar>

                                                <div class="subheading"><strong>Jane Appleseed</strong></div>
                                                <div class="caption">Facebook Messanger</div>

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
    </section> --}}

    <section id="partnership">
        <v-container fluid>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 md12 sm12 xs12>
                    <v-card-text class="text-xs-center my-3">
                        <h2 class="display-1">{{ __("PARTNERSHIPS") }}</h2>
                        <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
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
            <v-parallax height="250" src="{{ assets('frontier/images/public/ski.jpg') }}">
                <v-layout
                    column
                    align-center
                    justify-center
                    class="white--text"
                    >
                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                    <v-card dark class="elevation-0 transparent">
                        <v-flex xs12>
                            {{-- <v-card-text class="title text-xs-center">Travel discounts up to 60% off</v-card-text> --}}
                            <v-layout row wrap>
                                <v-flex md5 xs12>
                                    <v-card-text>
                                        <v-menu
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
        .hero-search .input-group.input-group--solo {
            min-height: 55px !important;
        }
        .fw-400 {
            font-weight: 400;
        }
        .fw-500 {
            font-weight: 500;
        }
        #hero .parallax__content {
            padding: 0;
        }
        #video .parallax__content {
            padding: 0;
        }
        .block {
            display: block !important;
        }
        footer a:hover,
        .social:hover {
            color: #ff6600 !important;
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
                    'alabama', 'durian'],
                    from: null,
                    to: null,
                    schedule: null,
                    menu: false,
                    menu: false,
                    search: null,
                    stories: [
                        { title: '2017 SCHEDULE', src: '{{ assets('frontier/images/public/h7.jpg') }}', flex: 8, height: '100%' },
                        { title: 'SPECIAL', src: '{{ assets('frontier/images/public/h3.jpg') }}', flex: 4 },
                        { title: 'SINGLES', src: '{{ assets('frontier/images/public/v2.jpg') }}', flex: 3},
                        { title: 'EAT AND EXPLORE', src: '{{ assets('frontier/images/public/h1.jpg') }}', flex: 6},
                        { title: 'RETRO', src: '{{ assets('frontier/images/public/v1.jpg') }}', flex: 3},
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
