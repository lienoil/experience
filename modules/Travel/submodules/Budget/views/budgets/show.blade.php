@extends("Theme::layouts.auth")
@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Public::sections.nav")
        </v-toolbar>
    </v-card>

    <section id="show">
        <v-container fluid grid-list-lg>
            <v-layout row wrap align-center justify-center>
                <v-flex lg11 sm12 xs12>
                    <div class="leftbar hidden-sm-and-down">
                        <v-card class="elevation-0 mb-3">
                            <v-card-media src="{{ assets('frontier/images/public/surf.jpg') }}" height="350px">
                            </v-card-media>
                        </v-card>

                        <v-card class="elevation-1 mb-3">
                            <v-toolbar class="elevation-0 transparent">
                                <v-toolbar-title>Travel Manager</v-toolbar-title>
                            </v-toolbar>
                            <v-divider></v-divider>
                            <v-card-text class="text-xs-center">
                                <div class="mb-2">
                                    <v-avatar size="100px">
                                        <img src="{{ assets('frontier/images/placeholder/man.jpg') }}" alt="">
                                    </v-avatar>
                                </div>
                                <span class="body-2 block pb-2">Cole Sprouse</span>
                                <div>
                                    The Travel Manager is the guy who will make sure your road trip will be full of adventures, excitement, tales to tell your grandchildren, epic memories and unforgettable experiences.
                                </div>
                            </v-card-text>
                        </v-card>
                    </div>

                    <div class="sidebar hidden-sm-and-down">
                        <v-card class="elevation-1 mb-3">
                            <v-card-media src="{{ assets('frontier/images/placeholder/red2.jpg') }}">
                                <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                                <v-card-text class="text-xs-center">
                                    <v-card dark class="elevation-0 transparent pt-4">
                                        <div class="title pb-3 white--text"><strong>Multi-Traveler - Road Trip: <br> 3-Day Getaway</strong></div>
                                        <div class="display-1 white--text">from ₱<span class="fw-500"> 600</span></div>
                                        <div class="body-2 white--text mb-2">per person</span></div>

                                        <div>
                                            <v-icon  n class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                            <v-icon class="subheading orange--text text--darken-1 pb-1">star_half</v-icon>
                                            <span class="caption">4.6</span>
                                        </div>

                                        <v-layout row wrap justify-center align-center>
                                            <v-flex xs10>
                                                <div class="py-4">
                                                    <v-select
                                                        autocomplete
                                                        class="mb-3"
                                                        label="Select budget"
                                                        slot="activator"
                                                        append-icon="keyboard_arrow_down"
                                                        v-bind:items="items"
                                                        clearable
                                                        search-input
                                                        solo tags>
                                                    </v-select>
                                                    <v-select
                                                        autocomplete
                                                        class="mb-3"
                                                        label="Number of Travelers"
                                                        slot="activator"
                                                        append-icon="keyboard_arrow_down"
                                                        v-bind:items="items"
                                                        clearable
                                                        search-input
                                                        solo tags>
                                                    </v-select>
                                                    <div class="text-xs-center">
                                                        <v-btn primary block large round class="elevation-1 px-4" href="..\billings">Get Going</v-btn>
                                                    </div>
                                                </div>
                                            </v-flex>
                                        </v-layout>
                                    </v-card>
                                </v-card-text>
                            </v-card>
                        </v-card-media>
                    </div>

                    <v-layout row wrap>
                        <v-flex xs12 class="py-0">
                            <div class="content">
                                <v-card class="elevation-1 mb-3">
                                    <div class="hidden-md-and-up">
                                        <v-card-media src="{{ assets('frontier/images/public/surf.jpg') }}" height="200px">
                                        </v-card-media>
                                    </div>
                                    <div>
                                        <v-card-text class="px-4">
                                            <h4 class="grey--text text--darken-3"><strong>Multi-Traveler - Road Trip: <br> 3-Day Getaway</strong></h4>
                                            <h4 class="title fw-400">From ₱ 600</h4>
                                        </v-card-text>
                                        <div class="hidden-md-and-up">
                                            <v-divider></v-divider>
                                            <v-card-text class="px-4">
                                                <div class="title mb-2 grey--text text--darken-2">Travel Manager</div>
                                                <div class="body-1 mb-2">A Few Details You Might Want To Know</div>
                                                <div class="mb-2">
                                                    <v-avatar size="100px">
                                                        <img src="{{ assets('frontier/images/placeholder/man.jpg') }}" alt="">
                                                    </v-avatar>
                                                </div>
                                                <span class="body-2 block pb-2">Cole Sprouse</span>
                                                <div>
                                                    The Travel Manager is the guy who will make sure your road trip will be full of adventures, excitement, tales to tell your grandchildren, epic memories and unforgettable experiences.
                                                </div>
                                            </v-card-text>
                                        </div>
                                        <v-divider></v-divider>
                                        <v-card-text class="px-4">
                                            <div class="title mb-2 grey--text text--darken-2">Have a car?</div>
                                            <div class="body-2 mt-3">We'll provide:</div>
                                            <div class="pt-3 subheading">
                                                <v-card-actions class="pa-0 pb-1">
                                                    <v-avatar size="40px">
                                                        <v-icon class="title mr-2 green--text text--lighten-1">check_circle</v-icon>
                                                    </v-avatar>
                                                    <div> Directions to your destination</div>
                                                </v-card-actions>
                                                <v-card-actions class="pa-0 pb-1">
                                                    <v-avatar size="40px">
                                                        <v-icon class="title mr-2 green--text text--lighten-1">check_circle</v-icon>
                                                    </v-avatar>
                                                    <div>  Accommodation reservation</div>
                                                </v-card-actions>
                                                <v-card-actions class="pa-0 pb-1">
                                                    <v-avatar size="40px">
                                                        <v-icon class="title mr-2 green--text text--lighten-1">check_circle</v-icon>
                                                    </v-avatar>
                                                    <div>  Curated map of recommendations for your destination.</div>
                                                </v-card-actions>
                                                <v-card-actions class="pa-0 pb-1">
                                                    <v-avatar size="40px">
                                                        <v-icon class="title mr-2 green--text text--lighten-1">check_circle</v-icon>
                                                    </v-avatar>
                                                    <div>  Recommendations for roadside attractions along the way</div>
                                                </v-card-actions>
                                            </div>
                                        </v-card-text>
                                    </div>
                                </v-card>
                            @include("Public::parts.review-exp")
                            </div>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
            <v-layout row wrap align-center justify-center>
                <v-flex lg11 sm12 xs12>
                    <v-card class="elevation-0 transparent py-3">
                        <v-card-text class="px-0">
                            <div class="title mb-2 grey--text text--darken-2">Similar Listings</div>
                            <div class="body-1 mb-2"> Lorem ipsum dolor cit amet</div>
                            <div class="pt-3">
                                <v-layout row wrap align-center>
                                    <v-flex xs12 sm4 md3 v-for="card in experiences">
                                        <a href="\experiences/show" ripple class="td-n">
                                            <v-card class="elevation-1 c-lift">
                                                <v-card-media
                                                    height="180px"
                                                    :src="card.src"
                                                    class="grey lighten-4">
                                                    <div class="text-xs-right" style="width: 100%;">
                                                        <v-btn large icon class="mr-3">
                                                            @include("Experience::components.wishlist")
                                                        </v-btn>
                                                        <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="card.price" style="position: absolute; bottom: 15px; right: 0;"></v-chip>
                                                    </div>
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
                            </div>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>

        {{-- mobile viewport --}}
        <v-card class="elevation-1 fixed-nav hidden-md-and-up" style="z-index: 3;">
            <v-divider></v-divider>
            <v-layout row wrap>
                <v-flex xs12>
                    <v-card-actions>
                        <v-card-text class="px-0 py-2">
                            <div class="subheading"><strong>₱ 6,000</strong> <span class="body-1">per person</span></div>
                            <v-dialog class="hidden-md-and-up" v-model="dialog.book" fullscreen transition="dialog-bottom-transition" :overlay=false>
                                <v-btn flat small class="body-2 primary--text details-btn" slot="activator">See details</v-btn>
                                <v-card>
                                    <v-toolbar light class="white elevation-0">
                                        <v-spacer></v-spacer>
                                        <v-btn icon @click.native="dialog.book = false">
                                            <v-icon>close</v-icon>
                                        </v-btn>
                                    </v-toolbar>
                                    <v-card-media src="{{ assets('frontier/images/placeholder/red2.jpg') }}">
                                        <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
                                        <v-card-text class="text-xs-center">
                                            <v-card dark class="elevation-0 transparent py-5">
                                                <div class="title pb-3 white--text"><strong>Random Road Trip #1</strong></div>
                                                <div class="display-2 white--text">₱<span class="fw-500"> 6,000</span></div>
                                                <div class="body-2 white--text mb-2">per person</span></div>

                                                <div>
                                                    <v-icon  n class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                                    <v-icon class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                                    <v-icon class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                                    <v-icon class="subheading orange--text text--darken-1 pb-1">star</v-icon>
                                                    <v-icon class="subheading orange--text text--darken-1 pb-1">star_half</v-icon>
                                                    <span class="caption">4.6</span>
                                                </div>
                                            </v-card>
                                                <div class="text-xs-center">
                                                    <v-btn primary large round class="elevation-1 px-4" href="..\billings">Experience Now</v-btn>
                                                </div>
                                        </v-card-text>
                                    </v-card-media>
                                    <v-list two-line>
                                        <v-list-tile>
                                            <v-list-tile-action>
                                                <v-icon color="indigo">date_range</v-icon>
                                            </v-list-tile-action>
                                            <v-list-tile-content>
                                                <v-list-tile-title>November 24 to 26</v-list-tile-title>
                                                <v-list-tile-sub-title>2017</v-list-tile-sub-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                        <v-list-tile>
                                            <v-list-tile-action>
                                                <v-icon color="indigo">schedule</v-icon>
                                            </v-list-tile-action>
                                            <v-list-tile-content>
                                                <v-list-tile-title>8pm, Friday</v-list-tile-title>
                                                <v-list-tile-sub-title>3 days</v-list-tile-sub-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                        <v-divider></v-divider>
                                        <v-card-text class="text-xs-center pa-1">
                                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-facebook</v-icon></v-btn>
                                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-twitter</v-icon></v-btn>
                                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-google</v-icon></v-btn>
                                        </v-card-text>
                                    </v-list>
                                    <v-divider></v-divider>
                                    <v-list subheader class="py-3">
                                        <v-list-tile avatar>
                                            <v-list-tile-avatar tile>
                                                <img src="{{ assets('frontier/images/public/cancel.png') }}"/>
                                            </v-list-tile-avatar>
                                            <v-list-tile-content>
                                                <v-list-tile-title>Cancellation Policy</v-list-tile-title>
                                                <v-list-tile-sub-title>Cancel before the trip</v-list-tile-sub-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                    </v-list>
                                    <v-list two-line subheader>
                                        <v-list-tile avatar>
                                            <v-list-tile-content>
                                                <v-list-tile-title class="fw-500">Full Refund</v-list-tile-title>
                                                <v-list-tile-sub-title>Before 2 weeks</v-list-tile-sub-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                        <v-list-tile avatar>
                                            <v-list-tile-content>
                                                <v-list-tile-title class="fw-500">Half Refund</v-list-tile-title>
                                                <v-list-tile-sub-title>5 to 10 business days</v-list-tile-sub-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                        <v-list-tile avatar>
                                            <v-list-tile-content>
                                                <v-list-tile-title class="fw-500">No Refund</v-list-tile-title>
                                                <v-list-tile-sub-title>Within or less than 5 days</v-list-tile-sub-title>
                                            </v-list-tile-content>
                                        </v-list-tile>
                                    </v-list>
                                </v-card>
                            </v-dialog>
                        </v-card-text>
                        <v-spacer></v-spacer>
                        <v-card-text class="px-0 py-2 text-xs-right">
                            <v-btn large primary round class="elevation-1 px-2" href="..\billings">Experience Now</v-btn>
                        </v-card-text>
                    </v-card-actions>
                </v-flex>
            </v-layout>
        </v-card>
    </section>
    @include("Public::sections.footer")
@endsection


@push('css')
    <style>
        #show .crumbs-items:first-child .breadcrumbs__item {
            padding-left: 0;
        }
        .fixed-nav {
            position: fixed !important;
            bottom: 0;
            width: 100%;
            z-index: 1;
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

        @media (min-width: 60em) {
            .sidebar {
                position: sticky;
                top: 85px;
                float: right;
                width: 25%;
            }
            .leftbar {
                position: sticky;
                top: 85px;
                float: left;
                width: 25%;
                margin-right: 10px;
            }
            .content {
                margin-right: 10px;
            }
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
                    e1: 'recent',
                    from: null,
                    to: null,
                    menu: false,
                    dialog: {
                        book: false
                    },
                    dates: [
                        { title: 'Click Me' },
                        { title: 'Click Me' },
                        { title: 'Click Me' },
                        { title: 'Click Me 2' }
                    ],
                    crumbs: [
                        {
                            text: 'Experiences',
                            disabled: false
                        },
                        {
                            text: 'Random Road Trip #1',
                            disabled: false
                        },
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
                    experiences: [
                        {
                            title: 'Random Road Trip #1',
                            price: '₱ 6,000',
                            category: 'Random Road Trip',
                            date: 'Oct 21-22',
                            src: '{{ assets('frontier/images/placeholder/windmill.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #2',
                            price: '₱ 10,000',
                            category: 'Random Road Trip',
                            date: 'Sep 11-13',
                            src: '{{ assets('frontier/images/placeholder/red2.jpg') }}'
                        },
                        {
                            title: 'Random Road Trip #3',
                            price: '₱ 13,000',
                            category: 'Random Road Trip',
                            date: 'Aug 21-22',
                            src: '{{ assets('frontier/images/placeholder/city.png') }}'
                        },
                        {
                            title: 'Random Road Trip #4',
                            price: '₱ 4,000',
                            category: 'Random Road Trip',
                            date: 'July 11-13',
                            src: '{{ assets('frontier/images/placeholder/9.png') }}'
                        },
                    ],
                    items: [
                        { text: 'State 1' },
                        { text: 'State 2' },
                        { text: 'State 3' },
                        { text: 'State 4' },
                        { text: 'State 5' },
                        { text: 'State 6' },
                        { text: 'State 7' }
                    ],
                }
            },
        });
    </script>
@endpush
