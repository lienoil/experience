@extends("Theme::layouts.auth")
@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            <a href="\home">
			    <img src="{{ assets('frontier/images/public/logo_icon.png') }}" alt="" width="80" style="padding-top: 8px;">
			</a>
			<v-spacer></v-spacer>
			<a href="">
				<v-avatar size="40px">
					<img src="{{ assets('frontier/images/placeholder/man.png') }}" alt="">
				</v-avatar>
			</a>
        </v-toolbar>
    </v-card>

    <section id="billing" class="white">
    	<v-container fluid grid-list-lg>
            <v-layout row wrap>
                <v-flex lg10 offset-lg1 sm12 xs12>
                	<v-layout row wrap>
						<v-flex md7 xs12>
							<v-card class="elevation-0">
                                <v-card-text class="pb-0 px-0">
                                    <h4 class="grey--text text--darken-3"><strong>{{ __("Review guest requirements") }}</strong></h4>
                                </v-card-text>
                            </v-card>
                            <v-card class="elevation-0 py-3">
                                <v-card-text class="px-0">
                                    <div class="title mb-2 grey--text text--darken-2">Alcohol</div>
                                    <div class="pt-3 subheading">
                                        This experience includes alcohol. Only guests who meet the legal drinking age will be served alcoholic beverages.
                                    </div>
                                </v-card-text>
                            </v-card>
                            <v-divider></v-divider>
                            <v-card class="elevation-0 py-3">
                                <v-card-text class="px-0">
                                    <div class="title mb-2 grey--text text--darken-2">Who can come</div>
                                    <div class="pt-3 subheading">
                                    	Guests ages 18 and up can attend.
                                    </div>
                                </v-card-text>
                            </v-card>
                            <v-divider></v-divider>
                            <v-card class="elevation-0 py-3">
                                <v-card-text class="px-0">
                                    <div class="title mb-2 grey--text text--darken-2">Who’s coming?</div>
                                    <div class="pt-3 subheading">
										<v-card-actions class="pt-0 pb-3">
											Angelina Scott
											<v-spacer></v-spacer>
											<v-avatar size="50px">
												<img src="{{ assets('frontier/images/placeholder/man.png') }}"/>
											</v-avatar>
										</v-card-actions>
										<v-card-actions class="pt-0 pb-3">
											Add another guest
											<v-spacer></v-spacer>
											<v-btn v-tooltip:bottom="{ html: 'Add' }" outline small fab accent>
										      	<v-icon>add</v-icon>
										    </v-btn>
										</v-card-actions>
                                    </div>
                                </v-card-text>
                            </v-card>
                            <v-divider class="hidden-sm-and-down"></v-divider>
                            <v-card-text class="text-xs-right hidden-sm-and-down px-0">
								<v-btn primary large class="elevation-1" href="\billings/show">Next</v-btn>
                            </v-card-text>
						</v-flex>
						<v-flex md4 offset-md1 xs12 class="hidden-sm-and-down">
	                        <v-card class="elevation-1 mb-3">
	                            <v-card-text class="py-4">
									<div class="title mb-2 fw-500">Random Road Trip #1</div>
									<div>Hosted by Paul Appleseed</div>
	                            </v-card-text>
	                            <v-divider></v-divider>
	                            <v-card-text class="py-4">
									<div class="subheading">November 24 to 26, 2017</div>
									<div class="subheading">Starts at 8pm, Friday</div>
									<div class="subheading">3 days</div>
	                            </v-card-text>
	                            <v-divider></v-divider>
	                            <v-card-text class="py-4">
									<v-card-actions class="pa-0">
										<div class="subheading">₱ 6,000 x 1 guest</div>
										<v-spacer></v-spacer>
										<div class="subheading">₱ 6,000</div>
									</v-card-actions>
	                            </v-card-text>
	                            <v-divider></v-divider>
	                            <v-card-text class="py-4">
									<v-card-actions class="pa-0">
										<div class="subheading">Total (PHP)</div>
										<v-spacer></v-spacer>
										<div class="title"><strong>₱ 6,000</strong></div>
									</v-card-actions>
	                            </v-card-text>
	                        </v-card>
                            <v-card class="elevation-1 mb-3">
                                <v-card-text class="py-4">
                                    <div class="subheading success--text mb-3">Cancellation Policy</div>
                                    <div class="body-1 mb-2">Get a <strong>full refund</strong> if you cancel before 2 weeks ( more than 10 business days ) before the trip.</div>
                                    <div class="body-1 mb-2"><strong>Half Refund</strong> within 10 business days but more than 5 days before the trip.</div>
                                    <div class="body-1 mb-2"><strong>No Refund</strong> within 5 days or less before the trip</div>
                                </v-card-text>
                            </v-card>
						</v-flex>
                	</v-layout>
                </v-flex>
            </v-layout>
        </v-container>

        <v-card class="elevation-1 fixed-nav hidden-md-and-up" style="z-index: 3;">
            <v-divider></v-divider>
            <v-layout row wrap>
                <v-flex xs12>
                    <v-card-actions>
                        <v-card-text class="py-2">
                            <div class="subheading"><strong>₱ 6,000</strong> <span class="body-1">per person</span></div>
                            <v-dialog class="hidden-md-and-up" v-model="dialog.billing" fullscreen transition="dialog-bottom-transition" :overlay=false>
                            <v-btn flat small class="body-2 primary--text ml-0 details-btn" slot="activator">See details</v-btn>
				                <v-card>
				                    <v-toolbar light class="white elevation-0">
				                    	<v-spacer></v-spacer>
				                        <v-btn icon @click.native="dialog.billing = false">
				                            <v-icon>close</v-icon>
				                        </v-btn>
				                    </v-toolbar>
				                    <v-card-text class="py-4">
										<div class="title mb-2 fw-500">Random Road Trip #1</div>
										<div>Hosted by Paul Appleseed</div>
		                            </v-card-text>
		                            <v-divider></v-divider>
		                            <v-card-text class="py-4">
										<div class="subheading">November 24 to 26, 2017</div>
										<div class="subheading">Starts at 8pm, Friday</div>
										<div class="subheading">3 days</div>
		                            </v-card-text>
		                            <v-divider></v-divider>
		                            <v-card-text class="py-4">
										<v-card-actions class="pa-0">
											<div class="subheading">₱ 6,000 x 1 guest</div>
											<v-spacer></v-spacer>
											<div class="subheading">₱ 6,000</div>
										</v-card-actions>
		                            </v-card-text>
		                            <v-divider></v-divider>
		                            <v-card-text class="py-4">
										<v-card-actions class="pa-0">
											<div class="subheading">Total (PHP)</div>
											<v-spacer></v-spacer>
											<div class="title"><strong>₱ 6,000</strong></div>
										</v-card-actions>
	                            	</v-card-text>
                                    <v-divider></v-divider>
                                    <v-card-text class="py-4">
                                        <div class="subheading success--text mb-3">Cancellation Policy</div>
                                        <div class="body-1 mb-3">Get a <strong>full refund</strong> if you cancel before 2 weeks <br> ( more than 10 business days ) before the trip.</div>
                                        <div class="body-1 mb-3"><strong>Half Refund</strong> within 10 business days but more than 5 days before the trip.</div>
                                        <div class="body-1 mb-3"><strong>No Refund</strong> within 5 days or less before the trip</div>
                                    </v-card-text>
				                </v-card>
				            </v-dialog>
                        </v-card-text>
                        <v-spacer></v-spacer>
                        <v-card-text class="py-2 text-xs-right">
                            <v-btn large primary class="elevation-1 px-2" href="\billings\show">Next</v-btn>
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
    	.fw-400 {
            font-weight: 400;
        }
        .fw-500 {
            font-weight: 500;
        }
        .fixed-nav {
            position: fixed !important;
            bottom: 0;
            width: 100%;
            z-index: 1;
        }
        .details-btn .btn__content {
        	padding-left: 0;
        	padding-right: 0;
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
                	dialog: {
                        billing: false
                    },
                }
            },
        });
    </script>
@endpush
