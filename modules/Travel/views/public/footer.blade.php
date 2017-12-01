<footer>
    <v-layout row wrap>
        <v-flex xs12>
            <v-card class="elevation-0 black py-5">
                <v-layout row wrap>
                    <v-flex lg10 offset-lg1 md12 sm12>
                        <v-container fill-height fluid class="pa-0 white--text">
                            <v-layout row wrap align-top justify-top>
                                <v-flex sm3 xs12>
                                    <v-card dark class="elevation-0 transparent">
                                        <v-card-text class="grey--text">
                                            <img src="{{ assets('frontier/images/public/footer.png') }}" alt="" width="120">
                                            <div class="body-2 mb-1">About Experience Philippines</div>
                                            <div class="caption mb-3">
                                                Experience Philippines is about UNIQUE ADVENTURES. We are a travel group that organizes RANDOM ROAD TRIPS where the destination is a SECRET and the activities are a SURPRISE.
                                            </div>
                                        </v-card-text>
                                    </v-card>
                                </v-flex>
                                <v-flex sm6 xs12>
                                    <v-card dark class="elevation-0 transparent">
                                        <v-card-text class="body-1">
                                            <v-layout row wrap>
                                                <v-flex sm5 offset-sm1>
                                                    <div class="body-2 mb-2 white--text">Experience Philippines</div>
                                                    <div class="mb-1">
                                                    <a href="" class="td-n grey--text">
                                                        Who We Are
                                                    </a>
                                                    </div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Crowd Funding
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Stories From The Road
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Privacy Policy
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Contact Us
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Sponsorships Opportunities
                                                    </a></div>
                                                </v-flex>
                                                <v-flex sm5 offset-sm1>
                                                    <div class="body-2 mb-2 white--text">Road Trips</div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Random Road Trips
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Singles Road Trips
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Random OUTings
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Retro Road Trips
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Quick Getaway
                                                    </a></div>
                                                    <div class="mb-1"><a href="" class="td-n grey--text">
                                                        Special Road Trips
                                                    </a></div>
                                                </v-flex>
                                            </v-layout>
                                        </v-card-text>
                                    </v-card>
                                </v-flex>
                                <v-flex sm3 xs12>
                                    <v-card dark class="elevation-0 transparent">
                                        <v-card-text class="caption grey--text">
                                            <div class="body-2 mb-2 white--text">Contact Us</div>
                                            <v-btn outline class="mb-2 mx-0 grey--text">Ask Us</v-btn>
                                            <div>Mobile: +63 917 563 9692</div>
                                            <div>Landline: +632 710 5641</div>
                                            <div>Email: giancarlo@experience.ph</div>
                                            <div>Unit 10G Le Grande Tower 2, Eastwood City, Bagumbayan, Quezon City, PHILIPPINES 1110.</div>
                                        </v-card-text>
                                    </v-card>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-flex>
                </v-layout>
            </v-card>

            <v-card class="elevation-0 black">
                <v-layout row wrap>
                    <v-flex lg10 offset-lg1 md12 sm12>
                        <v-divider class="grey darken-3"></v-divider>
                        <v-card-actions>
                            <div class="caption grey--text">© 2017 EXPERIENCE PHILIPPINES</div>
                            <v-spacer></v-spacer>
                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-facebook</v-icon></v-btn>
                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-twitter</v-icon></v-btn>
                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-youtube</v-icon></v-btn>
                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-instagram</v-icon></v-btn>
                            <v-btn icon class="social"><v-icon class="subheading grey--text">fa fa-pinterest</v-icon></v-btn>
                        </v-card-actions>
                    </v-flex>
                </v-layout>
            </v-card>
        </v-flex>
    </v-layout>
</footer>

@push('css')
    <style>
        footer a:hover,
        .social:hover {
            color: #ff6600 !important;
        }
    </style>
@endpush
