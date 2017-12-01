<v-card class="elevation-1 sticky">
    <v-toolbar light class="elevation-0 white">
        <a href="\home">
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
                        <v-list-tile-title>Home</v-list-tile-title>
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
            <v-btn small flat href="\home">{{ __('Home') }}</v-btn>
            <v-btn small flat primary href="experiences">{{ __('Experience') }}</v-btn>
            <v-btn small flat>{{ __('Roadtrip') }}</v-btn>
            <v-btn small flat>{{ __('Pack and Go') }}</v-btn>
            <v-btn small flat>{{ __('Stories') }}</v-btn>
            <v-btn small flat>{{ __('Login') }}</v-btn>
            <v-btn small flat>{{ __('Register') }}</v-btn>
        </div>

    </v-toolbar>
</v-card>
