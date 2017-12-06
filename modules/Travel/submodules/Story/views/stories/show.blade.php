@extends("Theme::layouts.auth")
@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Public::sections.nav")
        </v-toolbar>
    </v-card>

    <section id="stories">
        <v-parallax class="elevation-1" height="auto" src="{{ assets('frontier/images/placeholder/9.png') }}">
            <v-layout row wrap align-end justify-center>
                <v-flex md8 xs12 pa-0>
                    <v-card tile flat class="mt-5" height="100%">
                        <v-toolbar dense card class="white">
                            <v-spacer></v-spacer>
                            <v-menu full-width>
                                <v-btn slot="activator" icon v-tooltip:bottom="{'html': 'More Actions'}"><v-icon>more_vert</v-icon></v-btn>
                            </v-menu>
                        </v-toolbar>
                        <v-card-text>
                            <v-container fluid grid-list-lg>
                                <v-flex sm12>
                                    <v-layout row wrap>
                                        <v-flex md3 sm2>
                                            <img src="{{ assets('frontier/images/public/s4.jpg') }}" width="100%" height="auto">
                                        </v-flex>
                                        <v-flex md9 sm10>
                                            <v-card-title primary-title class="pa-0 mb-2">
                                                <strong class="headline accent--text">Road Tripper Monday: Janrey Ligutan</strong>
                                            </v-card-title>

                                            <v-avatar size="30px">
                                                <img src="{{ assets('frontier/images/placeholder/woman.jpg') }}">
                                            </v-avatar>
                                            <v-chip label small class="pl-0 caption transparent grey--text elevation-0">
                                                <a href="">Jane Appleseed</a>
                                            </v-chip>

                                            <v-footer class="transparent">
                                                <v-chip label small class="pl-0 ml-0 caption transparent grey--text elevation-0"><v-icon left small class="subheading">label</v-icon><span>Canon Photo Adventure</span></v-chip>

                                                <v-chip label small class="pl-0 ml-0 caption transparent grey--text elevation-0"><v-icon left small class="subheading">fa-clock-o</v-icon><span>November 11, 2017</span></v-chip>
                                            </v-footer>
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                            </v-container>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-parallax>
        <v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 sm12 xs12>
                    <v-layout row wrap>
                        <v-flex md8 sm7 xs12>
                            <v-card class="elevation-1 mb-3" v-for="card in stories">
                                <v-card-media :src="card.src" height="350px"></v-card-media>
                                <v-card-text>
                                    <div class="title mb-2">@{{ card.title }}</div>
                                    <div class="mb-4">
                                        <v-avatar size="30px" class="mr-2 ml-1"><img src="{{ assets('frontier/images/placeholder/woman.jpg') }}" alt=""></v-avatar>
                                        <span class="body-1">@{{ card.user }},
                                            <span class="grey--text">@{{ card.date }}</span>
                                        </span>
                                    </div>
                                    <div class="subheading">@{{ card.overview }}</div>
                                </v-card-text>
                                <v-card-actions>
                                    <v-btn flat primary href="\stories/show">Read More</v-btn>
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

                            <v-card-text>
                                <div class="text-xs-center">
                                    <v-pagination circle :length="15" v-model="page" :total-visible="7" class="caption main-paginate"></v-pagination>
                                </div>
                            </v-card-text>
                        </v-flex>
                        <v-flex md4 sm5 xs12>
                            <v-card class="elevation-1 mb-3">
                                <v-select
                                    autocomplete
                                    label="Search article.."
                                    slot="activator"
                                    append-icon=""
                                    prepend-icon="search"
                                    clearable
                                    search-input
                                     solo tags>
                                </v-select>
                            </v-card>

                            <v-card class="elevation-1 mb-3 ">
                                <v-card-text class="py-0">
                                    <v-subheader class="pl-0">{{ __('ABOUT US') }}</v-subheader>
                                </v-card-text>
                                <v-divider></v-divider>
                                <v-card-text>
                                    <div class="mb-3">
                                        <img src="{{ assets('frontier/images/public/exph_logo_o.png') }}" alt="" width="100%" style="max-width: 200px;">
                                    </div>
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
                            </v-card>

                            <v-card class="elevation-1 mb-3">
                                <v-card-text class="py-0">
                                    <v-subheader class="pl-0">{{ __('INSTAGRAM') }}</v-subheader>
                                </v-card-text>
                                <v-divider></v-divider>
                                <v-card-text>
                                    <v-layout row wrap>
                                        <v-flex xs4>
                                            <img src="{{ assets('frontier/images/placeholder/11.jpg') }}" alt="" width="100%">
                                        </v-flex>
                                        <v-flex xs4>
                                            <img src="{{ assets('frontier/images/placeholder/15.jpg') }}" alt="" width="100%">
                                        </v-flex>
                                        <v-flex xs4>
                                            <img src="{{ assets('frontier/images/placeholder/windmill.jpg') }}" alt="" width="100%">
                                        </v-flex>
                                    </v-layout>
                                    <v-layout row wrap>
                                        <v-flex xs4>
                                            <img src="{{ assets('frontier/images/placeholder/windmill.jpg') }}" alt="" width="100%">
                                        </v-flex>
                                        <v-flex xs4>
                                            <img src="{{ assets('frontier/images/placeholder/11.jpg') }}" alt="" width="100%">
                                        </v-flex>
                                        <v-flex xs4>
                                            <img src="{{ assets('frontier/images/placeholder/15.jpg') }}" alt="" width="100%">
                                        </v-flex>
                                    </v-layout>
                                    <v-btn block primary class="elevation-1">View on Instagram</v-btn>
                                </v-card-text>
                            </v-card>

                            <v-card class="elevation-1 mb-3">
                                <v-card-text class="py-0">
                                    <v-subheader class="pl-0">{{ __('POPULAR POSTS') }}</v-subheader>
                                </v-card-text>
                                <v-divider></v-divider>
                                <v-list two-line>
                                    <v-list-tile avatar @click="" ripple v-for="card in pop">
                                        <v-list-tile-avatar>
                                            <img v-bind:src="card.src"/>
                                        </v-list-tile-avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title>@{{ card.title }}</v-list-tile-title>
                                            <v-list-tile-sub-title>@{{ card.date }}</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-card>
                            <v-card class="elevation-1 mb-3">
                                <v-card-text class="py-0">
                                    <v-subheader class="pl-0">{{ __('CATEGORIES') }}</v-subheader>
                                </v-card-text>
                                <v-divider></v-divider>
                                <v-list>
                                    <v-list-tile avatar @click="" ripple v-for="item in categories" v-bind:key="item.title">
                                        <v-list-tile-action>
                                            <v-icon class="primary--text">label</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>@{{ item.title }}</v-list-tile-title>
                                        </v-list-tile-content>
                                        <v-list-tile-action>
                                            <v-chip label small>24</v-chip>
                                        </v-list-tile-action>
                                    </v-list-tile>
                                </v-list>
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
                    categories: [
                        {
                            title: 'Article'
                        },
                        {
                            title: 'Canon Photo Adventure'
                        },
                        {
                            title: 'Experience Philippines'
                        },
                        {
                            title: 'Inspiration'
                        }
                    ],
                    stories: [
                        {
                            src: '{{ assets('frontier/images/placeholder/17.jpg') }}',
                            title: 'Road Tripper Monday: Janrey Ligutan',
                            user: 'Jane Appleseed',
                            date: 'November 21, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        },
                        {
                            src: '{{ assets('frontier/images/placeholder/city.jpg') }}',
                            title: 'Road Tripper Monday: Nikki Escanillas',
                            user: 'Jane Appleseed',
                            date: 'November 11, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        },
                        {
                            src: '{{ assets('frontier/images/placeholder/8.jpg') }}',
                            title: 'Road Tripper Monday: Janrey Ligutan',
                            user: 'Jane Appleseed',
                            date: 'November 21, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        },
                        {
                            src: '{{ assets('frontier/images/placeholder/red2.jpg') }}',
                            title: 'Road Tripper Monday: Nikki Escanillas',
                            user: 'Jane Appleseed',
                            date: 'November 11, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        },
                        {
                            src: '{{ assets('frontier/images/placeholder/city.png') }}',
                            title: 'Road Tripper Monday: Ginie Gonnacao',
                            user: 'Jane Appleseed',
                            date: 'November 11, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        }
                    ],
                    pop: [
                        {
                            src: '{{ assets('frontier/images/public/s2.jpg') }}',
                            title: "10 Reasons Why I'd Love To Visit Isabela Province Again",
                            date: 'November 22, 2017'
                        },
                        {
                            src: '{{ assets('frontier/images/public/s1.jpg') }}',
                            title: "Road Tripper Monday: Ginie Gonnacao",
                            date: 'November 18, 2017'
                        },
                        {
                            src: '{{ assets('frontier/images/public/s3.jpg') }}',
                            title: 'Road Tripper Monday: Jen Medrano',
                            date: 'November 15, 2017'
                        },
                        {
                            src: '{{ assets('frontier/images/public/s4.jpg') }}',
                            title: 'Road Tripper Monday: Nikki Escanillas',
                            date: 'November 12, 2017'
                        },
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
