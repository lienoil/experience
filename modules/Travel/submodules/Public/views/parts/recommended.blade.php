<section id="recommended">
    <v-container fluid grid-list-lg>
        <v-layout row wrap align-center justify-center>
            <v-flex lg10 md12 sm12 xs12>
                <v-card-text class="text-xs-center my-3">
                    <h2 class="display-1">{{ __("EXPERIENCE RECOMMENDED") }}</h2>
                    <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                </v-card-text>
                <v-layout row wrap>
                    <v-flex xs12>
                            <div class="ssl-1">
                                <section class="regular slider ssl-2 my-2" >
                                    <div class="my-2 ssl-3" v-for="card in reco">
                                        <div class="ssl-4">
                                            <div class="ssl-5">
                                                <a href="experiences/show" ripple class="td-n">
                                            <v-card class="elevation-1">
                                                <v-card-media
                                                    height="180px"
                                                    :src="card.src"
                                                    class="grey lighten-4">
                                                    <v-chip label class="ma-0 white--text deep-orange darken-1" v-html="card.price" style="position: absolute; bottom: 15px; right: 0;"></v-chip>
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
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>
</section>

@push('pre-scripts')
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
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
                    ],
                }
            },
        });
    </script>
@endpush
