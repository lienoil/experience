@extends("Theme::layouts.auth")

@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <header>
        <v-toolbar class="elevation-1 white" white>
            <a href="home">
                <img src="{{ assets('frontier/images/public/exph_logo_o.png') }}" alt="" width="150">
            </a>
            <div class="hidden-lg-and-up">
                <v-menu
                    transition="slide-x-transition"
                    bottom
                    right
                    :nudge-width="200"
                    >
                    <v-btn icon slot="activator" v-tooltip:bottom="{html:'Menu'}"><v-icon>keyboard_arrow_down</v-icon></v-btn>
                    <v-list>
                        <v-list-tile ripple @click="">
                            <v-list-tile-title>Experience</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile ripple @click="">
                            <v-list-tile-title>Road Trips</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile ripple @click="">
                            <v-list-tile-title>Pack &amp; Go</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile ripple @click="">
                            <v-list-tile-title>Stories</v-list-tile-title>
                        </v-list-tile>
                        <v-divider></v-divider>
                        <v-list-tile ripple @click="">
                            <v-list-tile-title>Log in</v-list-tile-title>
                        </v-list-tile>
                        <v-list-tile ripple @click="">
                            <v-list-tile-title>Register</v-list-tile-title>
                        </v-list-tile>
                    </v-list>
                </v-menu>
            </div>

            <v-spacer></v-spacer>
            <div class="hidden-md-and-up">
                <v-dialog v-model="dialog.search" fullscreen transition="dialog-bottom-transition" :overlay=false>
                    <v-btn icon slot="activator" v-tooltip:bottom="{html: 'Search'}"><v-icon>search</v-icon></v-btn>
                    <v-card>
                        <v-toolbar dark class="elevation-1">
                            <v-btn icon @click.native="dialog.search = false" dark>
                                <v-icon>close</v-icon>
                            </v-btn>
                            <v-toolbar-title>Settings</v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-toolbar-items>
                                <v-btn dark flat @click.native="dialog.search = false">Save</v-btn>
                            </v-toolbar-items>
                        </v-toolbar>
                    </v-card>
                </v-dialog>
            </div>
            <div class="hidden-md-and-down">
                <v-btn small flat>{{ __('Experience') }}</v-btn>
                <v-btn small flat>{{ __('Roadtrip') }}</v-btn>
                <v-btn small flat>{{ __('Pack &amp; Go') }}</v-btn>
                <v-btn small flat>{{ __('Stories') }}</v-btn>
                <v-btn small flat>{{ __('Login') }}</v-btn>
                <v-btn small flat>{{ __('Register') }}</v-btn>
            </div>
        </v-toolbar>
    </header>

    <main>
        <section id="hero">
            <v-parallax height="600" src="{{ assets('frontier/images/public/alabama.jpg') }}">
                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                <v-toolbar class="elevation-0 transparent my-3" dark>
                    <a href="">
                        <img class="pt-3" src="{{ assets('frontier/images/public/exph_logo.png') }}" alt="" width="150">
                    </a>
                    <div class="hidden-lg-and-up mt-3">
                        <v-menu
                            transition="slide-y-transition"
                            bottom
                            right
                            :nudge-width="200"
                            >
                            <v-btn icon slot="activator" v-tooltip:bottom="{html:'Menu'}"><v-icon>keyboard_arrow_down</v-icon></v-btn>
                            <v-list>
                                <v-list-tile ripple @click="">
                                    <v-list-tile-title>Experiences</v-list-tile-title>
                                </v-list-tile>
                                <v-list-tile ripple @click="">
                                    <v-list-tile-title>Road Trips</v-list-tile-title>
                                </v-list-tile>
                                <v-list-tile ripple @click="">
                                    <v-list-tile-title>Pack &amp; Go</v-list-tile-title>
                                </v-list-tile>
                                <v-list-tile ripple @click="">
                                    <v-list-tile-title>Stories</v-list-tile-title>
                                </v-list-tile>
                                <v-divider></v-divider>
                                <v-list-tile ripple @click="">
                                    <v-list-tile-title>Log in</v-list-tile-title>
                                </v-list-tile>
                                <v-list-tile ripple @click="">
                                    <v-list-tile-title>Register</v-list-tile-title>
                                </v-list-tile>
                            </v-list>
                        </v-menu>
                    </div>
                    <v-spacer></v-spacer>
                    <div class="hidden-md-and-down">
                        <v-btn small flat href="experiences">{{ __('Experience') }}</v-btn>
                        <v-btn small flat>{{ __('Roadtrip') }}</v-btn>
                        <v-btn small flat>{{ __('Pack and Go') }}</v-btn>
                        <v-btn small flat>{{ __('Stories') }}</v-btn>
                        <v-btn small flat>{{ __('Login') }}</v-btn>
                        <v-btn small flat>{{ __('Register') }}</v-btn>
                    </div>
                    <div class="hidden-md-and-up mt-3">
                        <v-dialog v-model="dialog.search" fullscreen transition="dialog-bottom-transition" :overlay=false>
                            <v-btn icon slot="activator" v-tooltip:bottom="{html: 'Search'}"><v-icon>search</v-icon></v-btn>
                            <v-card>
                                <v-toolbar dark class="elevation-1">
                                    <v-btn icon @click.native="dialog.search = false" dark>
                                        <v-icon>close</v-icon>
                                    </v-btn>
                                    <v-toolbar-title>Settings</v-toolbar-title>
                                    <v-spacer></v-spacer>
                                    <v-toolbar-items>
                                        <v-btn dark flat @click.native="dialog.search = false">Save</v-btn>
                                    </v-toolbar-items>
                                </v-toolbar>
                            </v-card>
                        </v-dialog>
                    </div>
                </v-toolbar>

                <v-layout column align-center justify-center class="white--text">
                    <v-card dark class="elevation-0 transparent">
                        <h2 class="mb-2 text-xs-center"><strong>{{ __("LET'S GO TRAVEL DIFFERENTLY") }}</strong></h2>
                        <h5 class="mb-3 text-xs-center fw-500">Experience a different kind of adventure</h5>
                        <div class="hidden-sm-and-down">
                            <v-menu
                                offset-y
                                :close-on-content-click="false"
                                class="block px-3"
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
                                <v-card class="pa-3" style="max-width: 745px !important;">
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
                </v-layout>
            </v-parallax>
            <v-card-text class="white elevation-1 text-xs-center hidden-xs-only">
                <v-layout row wrap>
                    <v-flex lg10 offset-lg1 md12 xs12>
                        <v-layout row wrap>
                            <v-flex sm4>
                                <v-list two-line subheader>
                                    <v-list-tile avatar>
                                        <v-list-tile-avatar tile>
                                            <img src="{{ assets('frontier/images/public/sun.png') }}" alt="">
                                        </v-list-tile-avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title>Discover a less touristy place</v-list-tile-title>
                                            <v-list-tile-sub-title>Lorem ipsum dolor cit amet</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-flex>
                            <v-flex sm4>
                                <v-list two-line subheader>
                                    <v-list-tile avatar>
                                        <v-list-tile-avatar tile>
                                            <img src="{{ assets('frontier/images/public/backpack.png') }}" alt="">
                                        </v-list-tile-avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title>Travel with people you do not know</v-list-tile-title>
                                            <v-list-tile-sub-title>Lorem ipsum dolor cit amet</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-flex>
                            <v-flex sm4>
                                <v-list two-line subheader>
                                    <v-list-tile avatar>
                                        <v-list-tile-avatar tile>
                                            <img src="{{ assets('frontier/images/public/map.png') }}" alt="">
                                        </v-list-tile-avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title>Seamless & Safe Booking</v-list-tile-title>
                                            <v-list-tile-sub-title>Lorem ipsum dolor cit amet</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-flex>
                        </v-layout>
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
                            <h2 class="subheading grey-

                            -text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                        </v-card-text>
                        <v-layout row wrap align-center>
                            <v-flex xs12
                                v-bind="{ [`sm${card.flex}`]: true }"
                                v-for="card in stories"
                                :key="card.title"
                                >
                                <a href="" ripple class="td-n">
                                    <v-card class="elevation-1 c-lift">
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
                    </v-flex>
                </v-layout>
            </v-container>
        </section>

        <section id="video">
            <v-layout row wrap>
                <v-flex xs12>
                    <v-layout row wrap align-center>
                        <v-flex xs12>
                            <v-parallax class="mb-4 mt-5" height="450" src="{{ assets('frontier/images/placeholder/18.jpg') }}">
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
                                                    <v-card class="elevation-1 c-lift">
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
                                                    <v-card class="elevation-1 c-lift">
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
                                                    <v-card class="elevation-1 c-lift">
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
                                    <v-card class="elevation-1 c-lift" height="100%">
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

        <section id="partnership">
            <v-container fluid>
                <v-layout row wrap>
                    <v-flex lg8 offset-lg2 md12 sm12 xs12>
                        <v-card-text class="text-xs-center my-3">
                            <h2 class="display-1">{{ __("PARTNERSHIPS") }}</h2>
                            <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                        </v-card-text>
                        <v-layout row wrap>
                            <v-flex sm3 xs12>
                                <v-card-text class="text-xs-center">
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="100%" alt="" style="max-width: 230px !important;">
                                </v-card-text>
                            </v-flex>
                            <v-flex sm3 xs12>
                                <v-card-text class="text-xs-center">
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="100%" alt="" style="max-width: 230px !important;">
                                </v-card-text class="text-xs-center">
                            </v-flex>
                            <v-flex sm3 xs12>
                                <v-card-text class="text-xs-center">
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="100%" alt="" style="max-width: 230px !important;">
                                </v-card-text>
                            </v-flex>
                            <v-flex sm3 xs12>
                                <v-card-text class="text-xs-center">
                                    <img src="{{ assets('frontier/images/public/exph.png') }}" width="100%" alt="" style="max-width: 230px !important;">
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

                <v-card class="elevation-0">
                    <v-card-media src="{{ assets('frontier/images/placeholder/17.jpg') }}" width="100%">
                        <div class="insert-overlay" style="background: rgba(0, 0, 0, .65); position: absolute; width: 100%; height: 100%;"></div>
                        <v-card-text class="pa-0 py-5">
                            <v-layout row wrap>
                                <v-flex lg8 offset-lg2>
                                    <v-card dark class="elevation-0 transparent">
                                        <v-card-text class="text-xs-center">
                                            <h4><strong>Lorem ipsum dolor</strong></h4>
                                            <div class="subheading">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</div>
                                        </v-card-text>
                                    </v-card>
                                    <v-layout row wrap>
                                        <v-flex md5 sm5 xs12>
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
                                        <v-flex md5 sm5 xs12>
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
                                        <v-flex md2 sm2 xs12>
                                            <v-card-text class="text-xs-center">
                                                <v-btn large flat round dark class="deep-orange lighten-1">Book Now</v-btn>
                                            </v-card-text>
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                            </v-layout>
                        </v-card-text>
                    </v-card-media>
                </v-card>
            </v-flex>
        </v-layout>
    </section>

    @include("Travel::public.footer")
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
        .c-lift {
            transition: all .2s ease;
        }
        .c-lift:hover {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
            box-shadow: 0 1px 8px rgba(0,0,0,.2),0 3px 4px rgba(0,0,0,.14),0 3px 3px -2px rgba(0,0,0,.12) !important;
        }
        /**/
        header {
            position: fixed;
            display: none;
            width: 100%;
            height: 64px;
            top: 0;
            background: transparent;
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
                    dialog: {
                        search: false
                    },
                    states: [
                    'alabama', 'durian'],
                    from: null,
                    to: null,
                    schedule: null,
                    menu: false,
                    search: null,
                    stories: [
                        { title: '2017 SCHEDULE', src: '{{ assets('frontier/images/placeholder/9.png') }}', flex: 8, height: '100%' },
                        { title: 'SPECIAL', src: '{{ assets('frontier/images/placeholder/14.jpg') }}', flex: 4 },
                        { title: 'SINGLES', src: '{{ assets('frontier/images/placeholder/city.png') }}', flex: 3},
                        { title: 'EAT AND EXPLORE', src: '{{ assets('frontier/images/placeholder/8.jpg') }}', flex: 6},
                        { title: 'RANDOM', src: '{{ assets('frontier/images/placeholder/red2.jpg') }}', flex: 3},
                    ],
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
                        }
                    ],
                    reco: [
                        {
                            title: 'FULL MOON PARTY Luna Sea: A Random Full Moon Party #4',
                            price: '₱ 6,000',
                            category: 'Retro Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/placeholder/9.jpg') }}'
                        },
                        {
                            title: 'Retro Road Trip #2',
                            price: '₱ 10,000',
                            category: 'Singles Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/placeholder/13.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/placeholder/red.jpg') }}'
                        },
                        {
                            title: 'Super Mega Awesome Random Road Trip #3',
                            price: '₱ 4,000',
                            category: 'Special Road Trip',
                            date: 'July 11-13',
                            src: '{{ assets('frontier/images/placeholder/8.jpg') }}'
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
