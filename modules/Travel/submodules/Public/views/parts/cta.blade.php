<section id="cta">
    <v-layout row wrap>
        <v-flex xs12>

            <v-card class="elevation-0">
                <v-card-media src="{{ assets('frontier/images/public/sierra.jpg') }}" width="100%">
                    <div class="insert-overlay" style="background: rgba(0, 0, 0, .65); position: absolute; width: 100%; height: 100%;"></div>
                    <v-card-text class="pa-0 py-5">
                        <v-layout row wrap align-center justify-center>
                            <v-flex lg8>
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
@push('pre-scripts')
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    from: null,
                    to: null,
                    schedule: null,
                }
            },
        });
    </script>
@endpush