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
        <v-parallax class="elevation-1" height="auto" src="{{ assets('frontier/images/placeholder/gradient.png') }}">
            <v-layout row wrap align-end justify-center>
                <v-flex lg7 md8 xs12 pa-0>
                    <v-card tile flat class="mt-5" height="100%">
                        <v-toolbar class="transparent elevation-0">
                            <v-btn flat accent href="\stories"><v-icon left>arrow_back</v-icon>Back</v-btn>
                            <v-spacer></v-spacer>
                            <v-menu bottom left>
                                <v-btn icon flat slot="activator" v-tooltip:bottom="{ html: 'More Actions' }"><v-icon>more_vert</v-icon></v-btn>
                                <v-list>
                                    <v-list-tile ripple @click="">
                                        <v-list-tile-action>
                                            <v-icon>flag</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>
                                                {{ __('Report') }}
                                            </v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-menu>
                        </v-toolbar>
                        <v-card-text>
                            <v-container fluid grid-list-lg>
                                <v-flex xs12>
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

                                            <div>
                                                <div class="caption grey--text mr-2">Share on:</div>

                                                <v-btn icon><v-icon>fa fa-facebook-official</v-icon></v-btn>
                                                <v-btn icon><v-icon>fa fa-twitter</v-icon></v-btn>
                                                <v-btn icon><v-icon>fa fa-pinterest</v-icon></v-btn>
                                                <v-btn icon><v-icon>fa fa-google-plus</v-icon></v-btn>
                                            </div>
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
            <v-layout row wrap align-center justify-center>
                <v-flex lg7 md8 sm12 xs12>
                    <v-card class="elevation-1 mb-4">
                        <v-toolbar class="elevation-0 white">
                            <v-toolbar-title>#‎RoadTripperMonday</v-toolbar-title>
                        </v-toolbar>
                        <v-divider></v-divider>
                        <v-card-text>
                            <div class="subheading">Now, we’ve come to the last month of 2017 and to the most wonderful, as well. As we welcome the first Monday of December, we will feature <strong>Alstarle Pacres</strong> or <strong>Star</strong>. She joined us two years ago in our December Singles Road Trip. She is very quiet at first but once you get to know her she is a person that can light up the room with her humor and wit. She is a traveler, a lover of books,  and a foodie! Don’t get her started on books coz she is like a walking library!</div>
                        </v-card-text>
                        <div class="pa-3">
                            <v-card-text>
                                <div class="body-2 pb-3">What do you do for a living?</div>
                                <div class="subheading">I’m a Talent Services Delivery Lead in IBM. I work on an outsourced account for recruitment services, helping our client get the best people for their team. </div>
                            </v-card-text>
                            <v-card-text>
                                <div class="body-2 pb-3">What is the title of the movie of your life?</div>
                                <div class="subheading">Buying books. It used to just be a “pleasure” but I have 47 books on my “to read” pile now (I counted), so I really shouldn’t be getting any more. I have very poor impulse control when it comes to books.</div>
                            </v-card-text>
                            <v-card-text>
                                <div class="body-2 pb-3">What is one of your guilty pleasures?</div>
                                <div class="subheading">“How to Alienate People with Sarcasm, an Introverted Personality, and a Resting Bitch Face”. It’s a tragicomedy!</div>
                            </v-card-text>
                        </div>
                        <v-layout row wrap>
                            <v-flex xs6 class="py-0 pr-0">
                                <v-list dark class="py-0 blue article-page">
                                    <v-list-tile avatar ripple @click="">
                                        <v-list-tile-action>
                                            <v-icon dark color="pink">arrow_back</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-sub-title>Previous</v-list-tile-sub-title>
                                            <v-list-tile-title>Road Tripper Monday: Janrey</v-list-tile-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list>
                            </v-flex>
                            <v-flex xs6 class="py-0 pl-0">
                                <v-list dark class="py-0 blue article-page">
                                    <v-list-tile avatar ripple @click="">
                                        <v-list-tile-content>
                                            <v-list-tile-sub-title class="text-xs-right">Next</v-list-tile-sub-title>
                                            <v-list-tile-title class="text-xs-right">Road Tripper Monday: Nikki</v-list-tile-title>
                                        </v-list-tile-content>
                                        <v-list-tile-action>
                                            <v-icon dark color="pink">arrow_forward</v-icon>
                                        </v-list-tile-action>
                                    </v-list-tile>
                                </v-list>
                            </v-flex>
                        </v-layout>
                    </v-card>
                    @include("Public::parts.comments")
                </v-flex>
            </v-layout>
        </v-container>
    </section>
    @include("Public::sections.footer")
@endsection


@push('css')
    <style>
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

        .article-page .list__tile--avatar {
            height: 86px;
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
                            src: '{{ assets('frontier/images/placeholder/gradient.png') }}',
                            avatar: '{{ assets('frontier/images/public/s4.jpg') }}',
                            title: 'Road Tripper Monday: Janrey Ligutan',
                            user: 'Jane Appleseed',
                            date: 'November 21, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        },
                        {
                            src: '{{ assets('frontier/images/placeholder/8.jpg') }}',
                            avatar: '{{ assets('frontier/images/public/s5.jpg') }}',
                            title: 'Road Tripper Monday: Nikki Escanillas',
                            user: 'Jane Appleseed',
                            date: 'November 11, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        },
                        {
                            src: '{{ assets('frontier/images/placeholder/city.jpg') }}',
                            avatar: '{{ assets('frontier/images/public/s3.jpg') }}',
                            title: 'Road Tripper Monday: Nikki Escanillas',
                            user: 'Jane Appleseed',
                            date: 'November 11, 2017',
                            overview: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, aliquam! Est eveniet explicabo maiores ea beatae aperiam aliquid quia, dignissimos necessitatibus labore, assumenda consequatur commodi dolore, mollitia provident ad. Ut.'
                        },
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
                }
            },
        });
    </script>
@endpush
