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
<div class="hidden-sm-and-down">
    <v-menu open-on-hover top offset-y>
        <v-btn flat slot="activator" class="grey--text text--darken-1"><v-icon left>search</v-icon>Search</v-btn>
        <v-card id="search-hover" style="max-width: 600px !important;">
            <v-select
                autocomplete
                label="What do you want to do or where do you want to go?"
                slot="activator"
                hide-details
                append-icon=""
                prepend-icon="search"
                search-input
                light solo hide-details
                class="elevation-0">
            </v-select>
            <v-divider></v-divider>
            <v-container fluid grid-list-lg>
                <v-layout row wrap>
                    <v-flex xs6 sm3 v-for="card in ssrch">
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
<div class="hidden-md-and-up">
    <v-dialog v-model="dialog.search" fullscreen transition="dialog-bottom-transition" :overlay=false>
        <v-btn icon slot="activator" v-tooltip:bottom="{html: 'Search'}"><v-icon>search</v-icon></v-btn>
        <v-card>
            <v-toolbar light class="elevation-1">
            <v-btn icon @click.native="dialog.search = false">
                <v-icon>chevron_left</v-icon>
            </v-btn>
            <div class="text-xs-center body-1">Search</div>
            </v-toolbar>
            <v-card-actions>
                <v-select
                    autocomplete
                    label="What do you want to do or where do you want to go?"
                    hide-details
                    append-icon=""
                    prepend-icon="search"
                    search-input
                    light solo hide-details
                    class="elevation-0">
                </v-select>
                <v-btn light flat @click.native="dialog.search = false">Go</v-btn>
            </v-card-actions>
            <v-divider></v-divider>
            <v-card-text>
                <v-subheader>Popular Experiences</v-subheader>
                <v-btn class="elevation-0" small accent>Random</v-btn>
            </v-card-text>
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
                    ssrch: [
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
                        },
                    ],
                }
            }
        })
    </script>
@endpush