<section id="hotlist">
    <v-container fluid grid-list-lg>
        <v-layout row wrap align-center justify-center>
            <v-flex lg10 md12 sm12 xs12>
                <v-card-text class="text-xs-center my-3">
                    <h2 class="display-1">{{ __("CURATED EXPERIENCES") }}</h2>
                    <h2 class="subheading grey--text text--darken-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</h2>
                </v-card-text>

                <v-layout row wrap>
                    <v-flex xs12>
                            <div class="ssl-1">
                                <section class="regular slider ssl-2 my-2" >
                                    <div class="my-2 ssl-3" v-for="card in exp">
                                        <div class="ssl-4">
                                            <div class="ssl-5">
                                                <a :href="route(dataset.urls.show, card.id)" ripple class="td-n">
                                                    <v-card class="elevation-1">
                                                        <v-card-media
                                                            height="180px"
                                                            :src="card.src"
                                                            class="grey lighten-4">
                                                            <v-chip label class="ma-0 white--text green lighten-1" v-html="card.price" style="position: absolute; bottom: 15px; right: 0;"></v-chip>
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
                                                                <v-icon class="subheading primary--text pb-1">star</v-icon>
                                                                <v-icon class="subheading primary--text pb-1">star</v-icon>
                                                                <v-icon class="subheading primary--text pb-1">star</v-icon>
                                                                <v-icon class="subheading primary--text pb-1">star</v-icon>
                                                                <v-icon class="subheading primary--text pb-1">star_half</v-icon>
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
                <v-card-text class="text-xs-center">
                    <v-btn outline large primary href="experiences">
                        <v-icon left>place</v-icon> {{ __('View All Experiences') }}
                    </v-btn>
                </v-card-text>
            </v-flex>
        </v-layout>
    </v-container>
</section>

@push('pre-scripts')
    <script>
        mixins.push({
            data () {
                return {
                    dataset: {
                        test: 1,
                        urls: {
                            edit: '{{ route('experiences.edit', 'null') }}',
                            show: '{{ route('experiences.show', 'null') }}',
                            destroy: '{{ route('experiences.destroy', 'null') }}',
                            api: {
                                destroy: '{{ route('api.experiences.destroy', 'null') }}',
                            },
                        },
                    },
                }
            },
        });
    </script>
@endpush
