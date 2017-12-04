@extends("Theme::layouts.auth")
@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Public::sections.nav")
        </v-toolbar>
    </v-card>

    <section id="stories" class="white">
        <v-layout row wrap>
            <v-flex xs12>
                <v-card class="elevation-1 mb-3">
                    <v-card-media src="{{ assets('frontier/images/placeholder/gradient.png') }}" height="350px"></v-card-media>
                </v-card>
            </v-flex>
        </v-layout>
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg8 offset-lg2 sm12 xs12>
                    <v-layout row wrap>
                        <v-flex md7 xs12>
                            <h5 class="fw-500 mb-4">{{ __('LATEST ARTICLE') }}</h5>
                            <v-card class="elevation-1 mb-3">
                                <v-card-media src="{{ assets('frontier/images/placeholder/17.jpg') }}" height="350px"></v-card-media>
                                <v-card-text>
                                    <div class="title mb-2">Road Tripper Monday: Janrey Ligutan</div>
                                    <div class="mb-4">
                                        <v-avatar size="30px" class="mr-2 ml-1"><img src="{{ assets('frontier/images/placeholder/woman.jpg') }}" alt=""></v-avatar>
                                        <span class="body-1">Jane Appleseed,
                                            <span class="grey--text">November 21, 2017</span>
                                        </span>
                                    </div>
                                    <div class="subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur suscipit impedit voluptatum, voluptatem magnam asperiores, dolores vel natus quae vitae deserunt? Sed quam doloribus quae at, nihil ipsam tempore, voluptatum.</div>
                                </v-card-text>
                                <v-card-actions>
                                    <v-btn flat primary>Read More</v-btn>
                                    <v-spacer></v-spacer>
                                    <v-bottom-sheet v-model="sheet.share">
                                    <v-btn slot="activator" v-tooltip:left="{ 'html': 'Share' }" icon><v-icon>share</v-icon></v-btn>
                                    <v-list>
                                        <v-subheader>Share on</v-subheader>
                                        <v-list-tile
                                            ripple
                                            v-for="tile in tiles"
                                            :key="tile.title"
                                            @click="sheet.share = false"
                                            >
                                                <v-list-tile-avatar>
                                                    <v-avatar size="32px">
                                                        {{-- <img src="tile.icon" :alt="tile.title"> --}}
                                                        <v-icon v-bind:class="[tile.iconClass]">@{{ tile.icon }}</v-icon>
                                                    </v-avatar>
                                                </v-list-tile-avatar>
                                            <v-list-tile-title>@{{ tile.title }}</v-list-tile-title>
                                        </v-list-tile>
                                      </v-list>
                                    </v-bottom-sheet>
                                </v-card-actions>
                            </v-card>

                            <v-card class="elevation-1">
                                <v-card-media src="{{ assets('frontier/images/placeholder/city.jpg') }}" height="350px"></v-card-media>
                                <v-card-text>
                                    <div class="title mb-2">Road Tripper Monday: Nikki Escanillas</div>
                                    <div class="mb-4">
                                        <v-avatar size="30px" class="mr-2 ml-1"><img src="{{ assets('frontier/images/placeholder/woman.jpg') }}" alt=""></v-avatar>
                                        <span class="body-1">Jane Appleseed,
                                            <span class="grey--text">November 21, 2017</span>
                                        </span>
                                    </div>
                                    <div class="subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur suscipit impedit voluptatum, voluptatem magnam asperiores, dolores vel natus quae vitae deserunt? Sed quam doloribus quae at, nihil ipsam tempore, voluptatum.</div>
                                </v-card-text>
                                <v-card-actions>
                                    <v-btn flat primary>Read More</v-btn>
                                    <v-spacer></v-spacer>
                                    <v-bottom-sheet v-model="sheet.share">
                                    <v-btn slot="activator" v-tooltip:left="{ 'html': 'Share' }" icon><v-icon>share</v-icon></v-btn>
                                    <v-list>
                                        <v-subheader>Share on</v-subheader>
                                        <v-list-tile
                                            ripple
                                            v-for="tile in tiles"
                                            :key="tile.title"
                                            @click="sheet.share = false"
                                            >
                                                <v-list-tile-avatar>
                                                    <v-avatar size="32px">
                                                        {{-- <img src="tile.icon" :alt="tile.title"> --}}
                                                        <v-icon v-bind:class="[tile.iconClass]">@{{ tile.icon }}</v-icon>
                                                    </v-avatar>
                                                </v-list-tile-avatar>
                                            <v-list-tile-title>@{{ tile.title }}</v-list-tile-title>
                                        </v-list-tile>
                                      </v-list>
                                    </v-bottom-sheet>
                                </v-card-actions>
                            </v-card>
                        </v-flex>
                        <v-flex md4 offset-md1 xs12>
                            <h5 class="fw-500 mb-4">{{ __('ABOUT') }}</h5>

                            <v-card class="elevation-0 mb-3">
                                <v-card-media src="{{ assets('frontier/images/placeholder/polygon.jpg') }}" height="200px"></v-card-media>
                                <v-card-text class="px-0">
                                    <div class="subheading mb-2">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsum, consectetur corporis! Incidunt ipsam, quibusdam voluptatum, iure officia dignissimos quo, harum sapiente illum repudiandae ab enim iusto mollitia. Doloribus, ipsam?
                                    </div>
                                    <div class="text-xs-center">
                                        <v-btn icon><v-icon>fa fa-facebook-official</v-icon></v-btn>
                                        <v-btn icon><v-icon>fa fa-instagram</v-icon></v-btn>
                                        <v-btn icon><v-icon>fa fa-twitter</v-icon></v-btn>
                                        <v-btn icon><v-icon>fa fa-pinterest</v-icon></v-btn>
                                    </div>
                                </v-card-text>
                            <v-divider></v-divider>
                            </v-card>
                            <v-card class="elevation-0 mb-3">
                                <v-card-media src="{{ assets('frontier/images/placeholder/polygon.jpg') }}" height="200px"></v-card-media>
                                <v-card-text class="px-0">
                                    <div class="subheading">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ipsum, consectetur corporis! Incidunt ipsam, quibusdam voluptatum, iure officia dignissimos quo, harum sapiente illum repudiandae ab enim iusto mollitia. Doloribus, ipsam?
                                    </div>
                                </v-card-text>
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
                width: 30%;
            }
            .content {
                margin-right: 30px;
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
                    sheet: {
                        share: false,
                    },
                    tiles: [
                        { icon: 'fa fa-facebook-official', title: 'Facebook', iconClass: 'blue--text text--darken-3' },
                        { icon: 'fa fa-google-plus', title: 'Google+', iconClass: 'red--text text--darken-1' },
                        { icon: 'fa fa-twitter', title: 'Twitter', iconClass: 'light-blue--text' },
                        { icon: 'fa fa-pinterest', title: 'Pinterest', iconClass: 'red--text'},
                    ],
                    e1: 'recent',
                    from: null,
                    to: null,
                    menu: false,
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
                            text: 'Random Road Trip',
                            disabled: false
                        },
                        {
                            text: 'Random Road Trip #1',
                            disabled: true
                        }
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
                }
            },
        });
    </script>
@endpush
