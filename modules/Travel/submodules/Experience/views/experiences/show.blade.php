@extends("Theme::layouts.public")
@section("head-title", $resource->name)
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Theme::sections.nav")
        </v-toolbar>
    </v-card>

    <v-parallax class="header elevation-1 hidden-sm-and-down" src="{{ @$resource->feature }}" style="height: 300px !important;">
        <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>
        <v-toolbar dark class="elevation-0 transparent">
            <v-btn flat href="\experiences"><v-icon left>keyboard_backspace</v-icon>{{ __('Back') }}</v-btn>
        </v-toolbar>
        <v-layout row wrap justify-center align-center>
            <v-flex xs12>
                <v-card class="transparent" flat>
                    <v-card-text class="text-xs-center">
                        <h2 class="display-2 white--text"> <strong>{{ $resource->name }}</strong> </h2>
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </v-parallax>
    <v-container fluid grid-list-lg>
        <v-layout row wrap>
            <v-flex md3 xs12 class="hidden-sm-and-down">
                <div class="stickybar">
                    {{-- TRAVEL MANAGER CARD --}}
                    <v-card class="elevation-1 mb-3">
                        <v-toolbar class="elevation-0 transparent">
                            <v-toolbar-title>{{ __('Experience Manager') }}</v-toolbar-title>
                        </v-toolbar>
                        <v-divider></v-divider>
                        <v-card-text class="text-xs-center">
                            <div class="mb-2">
                                <v-avatar size="200px">
                                    <img src="{{ $resource->user->avatar }}" alt="">
                                </v-avatar>
                            </div>
                            <span class="body-2 block pb-2">{{ $resource->user->fullname }}</span>
                            <div class="grey--text">
                                {{ __("The Experience Manager is the one who will make sure your road trip will be full of adventures, excitement, tales to tell your grandchildren, epic memories and unforgettable experiences.") }}
                            </div>
                        </v-card-text>
                    </v-card>
                    {{-- TRAVEL MANAGER CARD --}}

                    {{-- CANCEL CARD --}}
                    {{-- <v-card class="elevation-1 mb-3">
                        <v-list subheader class="py-3">
                            <v-list-tile avatar>
                                <v-list-tile-avatar tile>
                                    <img src="{{ assets('frontier/images/public/cancel.png') }}"/>
                                </v-list-tile-avatar>
                                <v-list-tile-content>
                                    <v-list-tile-title>{{ __('Cancellation Policy') }}</v-list-tile-title>
                                    <v-list-tile-sub-title>{{ __("You may cancel before the trip") }}</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list>
                        <v-divider></v-divider>
                        <v-list two-line subheader>
                            <v-list-tile avatar>
                                <v-list-tile-action>
                                    <v-icon warning>warning</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title class="fw-500">{{ __('Full Refund') }}</v-list-tile-title>
                                    <v-list-tile-sub-title>{{ __('Before 2 weeks') }}</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                            <v-list-tile avatar>
                                <v-list-tile-action>
                                    <v-icon warning>warning</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title class="fw-500">{{ __('Half Refund') }}</v-list-tile-title>
                                    <v-list-tile-sub-title>{{ __('5 to 10 business days') }}</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                            <v-list-tile avatar>
                                <v-list-tile-action>
                                    <v-icon warning>warning</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title class="fw-500">{{ __('No Refund') }}</v-list-tile-title>
                                    <v-list-tile-sub-title>{{ __('Within or less than 5 days') }}</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list>
                    </v-card> --}}
                    {{-- CANCEL CARD --}}

                </div>
            </v-flex>

            <v-flex md6 xs12>
                <v-card class="elevation-1 mb-3">
                    <div class="hidden-md-and-up">
                        <v-card-media class="elevation-1" src="{{ $resource->feature }}" height="200px">
                            <v-toolbar dark class="elevation-0 transparent">
                                <v-btn flat href="\experiences"><v-icon left>keyboard_backspace</v-icon>{{ __('Back') }}</v-btn>
                            </v-toolbar>
                        </v-card-media>
                    </div>
                    <v-toolbar dark flat class="primary">
                        <v-toolbar-title>{{ $resource->name }}</v-toolbar-title>
                    </v-toolbar>
                    <div class="hidden-md-and-up">
                        <v-card-text>
                            <v-toolbar class="elevation-0 transparent">
                                <v-toolbar-title>{{ __('Experience Manager') }}</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text class="grey--text text--darken-2 subheading">
                                <p class="text-xs-center">
                                    <v-avatar size="100px">
                                        <img src="{{ $resource->user->avatar }}" alt="">
                                    </v-avatar>
                                </p>
                                <p class="text-xs-center"><strong>{{ $resource->user->displayname }}</strong></p>
                                <p class="text-xs-center">{{ __('The Experience Manager is the guy who will make sure your road trip will be full of adventures, excitement, tales to tell your grandchildren, epic memories and unforgettable experiences.') }}</p>
                            </v-card-text>
                        </v-card-text>
                    </div>
                    <v-divider></v-divider>

                    <v-card flat class="pa-3">

                        {{-- BODY --}}
                        <v-card-text class="grey--text text--darken-2 subheading page-text">
                            {!! $resource->body !!}
                        </v-card-text>
                        {{-- BODY --}}

                        {{-- PACKAGE INCLUSIONS --}}
                        <v-card-text class="grey--text text--darken-2 subheading">
                            <p><strong>{{ __('Package Inclusions') }}</strong></p>
                            <v-layout row wrap justify-space-between>
                                @foreach ($resource->amenities as $amenity)
                                    <v-flex sm4 xs12 class="py-0">
                                        <v-card-actions class="pa-0 pb-1">
                                            <v-avatar size="40px">
                                                <v-icon class="title mr-2">{{ $amenity->icon }}</v-icon>
                                            </v-avatar>
                                            <div>{{ __($amenity->name) }}</div>
                                        </v-card-actions>
                                    </v-flex>
                                @endforeach
                            </v-layout>
                        </v-card-text>
                        {{-- PACKAGE INCLUSIONS --}}

                    </v-card>

                    <v-divider></v-divider>

                    <v-card-text>
                        <v-toolbar class="elevation-0 transparent">
                            <v-toolbar-title>How to make a reservation?</v-toolbar-title>
                        </v-toolbar>
                        <v-card-text class="grey--text text--darken-2 subheading">
                            <p>BPI Account Number</p>
                            <v-list two-line subheader>
                                <v-list-tile avatar>
                                    <v-list-tile-avatar>
                                        <v-icon>credit_card</v-icon>
                                    </v-list-tile-avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title>{{ settings('ad', '9641-0003-69') }}</v-list-tile-title>
                                        <v-list-tile-sub-title>EXPH Travel Differently Inc.</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list>
                            <p>For proof of payment</p>
                            <v-list two-line subheader>
                                <v-list-tile avatar>
                                    <v-list-tile-avatar>
                                        <v-icon>contact_phone</v-icon>
                                    </v-list-tile-avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title>0917-563-9692</v-list-tile-title>
                                        <v-list-tile-sub-title>Send a text message of your deposit</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                                <v-list-tile avatar>
                                    <v-list-tile-avatar>
                                        <v-icon>email</v-icon>
                                    </v-list-tile-avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title>adventures@experience.ph</v-list-tile-title>
                                        <v-list-tile-sub-title>Send the scanned deposit slip</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list>
                            <p>You can pay us through credit card via  Paypal's secured payment website</p>
                        </v-card-text>
                    </v-card-text>

                    {{-- MAP --}}
                    <v-divider></v-divider>
                    <v-card-text>
                        <v-toolbar class="elevation-0 transparent">
                            <v-toolbar-title>Meetup Place</v-toolbar-title>
                        </v-toolbar>
                        <v-card-text>
                            <div class="pb-4">{!! nl2br($resource->map_instructions) !!}</div>
                                {!! $resource->map !!}
                        </v-card-text>
                    </v-card-text>
                    <v-divider></v-divider>
                    {{-- MAP --}}


                    <v-divider class="hidden-md-and-up"></v-divider>

                    <v-list subheader class="py-0 hidden-md-and-up">
                        <v-subheader>Frequently Asked Questions</v-subheader>
                        <v-list-tile avatar ripple @click.stop="resource.faq = true">
                            <v-list-tile-avatar tile>
                                <img src="{{ assets('frontier/images/public/question.png') }}"/>
                            </v-list-tile-avatar>
                            <v-list-tile-content>
                                <v-list-tile-title>Experience Philippines</v-list-tile-title>
                                <v-list-tile-sub-title>Help Center</v-list-tile-sub-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list>

                    <v-dialog
                        v-model="resource.faq"
                        fullscreen
                        transition="dialog-bottom-transition"
                        :overlay=false
                        >
                        <v-card class="elevation-1">
                            <v-toolbar class="sticky" dark class="accent">
                                <v-toolbar-title>
                                    {{ __('Frequently Asked Questions') }}
                                </v-toolbar-title>
                                <v-spacer></v-spacer>
                                <v-btn flat @click.native="resource.faq = false" class="primary">
                                    Close
                                </v-btn>
                            </v-toolbar>
                            <v-card-text>
                                <v-card class="elevation-1">
                                    <v-toolbar class="elevation-0 white">
                                        <v-toolbar-title>Questions</v-toolbar-title>
                                    </v-toolbar>
                                    <v-divider></v-divider>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">You really don’t tell the destination?</div>
                                        <div class="pt-3 subheading">
                                            Yes, we really do not reveal the destination until we get there or during the departure. Sometimes you can coax Gian to get excited and he might slip and tell you the destination. He is getting better at hiding it but his weakness is Milk Tea.
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">What if I have been to that destination?</div>
                                        <div class="pt-3 subheading">
                                            Like we said, we value the EXPERIENCE more than the destination. We are a bunch of guys and gals who always have this sense of wonder and excitement even if we have been in a destination more than once. Traveling with a new set of people will always be different. And Mother Nature always seem to surprise us with new discoveries and experiences.
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">What is the transport for the Random Road Trip?</div>
                                        <div class="pt-3 subheading">
                                            We’ve been on tricycles, 4x4s, dump trucks, hummers, and even small charter planes! You can check out our many crazy rides here – The Many Crazy Rides in Our Random Road Trips
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">Is it safe and secure?</div>
                                        <div class="pt-3 subheading">
                                           We value everyone’s safety and security. We coordinate always with the local tourism offices because one of our goals is to be help small communities within the local government. We have a first aid kit.
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">What do I bring to the Road Trip?</div>
                                        <div class="pt-3 subheading">
                                            Just bring some extra clothes, swimming attire, towel, snacks, water, sunscreen, camera, and some cash for entrance and food.
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">What are the usual activities? </div>
                                        <div class="pt-3 subheading">
                                             You can expect to get wet, to be sun kissed, to meet locals, to eat unusual food. Sometimes if we are lucky, we even get to see shooting stars.
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">What happens if you guys don’t fill the slots?</div>
                                        <div class="pt-3 subheading">
                                               We do have a minimum number of road trippers for a road trip to push through. In those cases when the slots are not filled: (1) we send an email informing participants of the situation, and (2) we either ask the participant wishes to join another road trip or (3) we do a complete refund as soon as we get their bank details.
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">What is your refund policy?</div>
                                        <div class="pt-3 subheading">
                                            <div class="mb-3">Please take note of our refund policy as follows:</div>
                                            <div class="mb-2"><strong>Full refund</strong> if you book before 2 weeks (More than 10 business days) before the trip</div>
                                            <div class="mb-2"> <strong>Half refund</strong> within 10 business days but more than 5 days before the trip</div>
                                            <div class="mb-2"><strong>No refund</strong> if 5 days or less before the trip</div>
                                        </div>
                                    </v-card-text>
                                    <v-card-text>
                                        <div class="subheading fw-500 mb-2 grey--text text--darken-2">Where can I contact the organizer with any questions?</div>
                                        <div class="pt-3 subheading">
                                            <div class="mb-3">You can get in touch with Jeff or Gian through the following methods:</div>
                                            <v-card-actions class="pa-0 pb-1">
                                                <v-avatar size="40px">
                                                    <v-icon class="title mr-2 primary--text">phone_iphone</v-icon>
                                                </v-avatar>
                                                <div> 0917- 572-7527 (Jeff)  or 0917-563-9692 (Gian)</div>
                                            </v-card-actions>
                                            <v-card-actions class="pa-0 pb-1">
                                                <v-avatar size="40px">
                                                    <v-icon class="title mr-2 primary--text">phone</v-icon>
                                                </v-avatar>
                                                <div> (+632) 710 5641</div>
                                            </v-card-actions>
                                            <v-card-actions class="pa-0 pb-1">
                                                <v-avatar size="40px">
                                                    <v-icon class="title mr-2 primary--text">email</v-icon>
                                                </v-avatar>
                                                <div> jeffrey@experience.ph or giancarlo@experience.ph</div>
                                            </v-card-actions>
                                        </div>
                                    </v-card-text>
                                </v-card>
                            </v-card-text>
                        </v-card>
                    </v-dialog>
                </v-card>
                @include("Review::widgets.reviews")
            </v-flex>

            <v-flex md3 xs12 class="hidden-sm-and-down">
                <div class="stickybar">
                    <v-card class="elevation-1 mb-3">
                        @can('edit-experience')
                        <v-card-actions>
                            <span class="grey--text caption">{{ __("Logged in as:") }} <em>{{ user()->displayrole }}</em></span>
                            <v-spacer></v-spacer>
                            <v-btn icon v-tooltip:left="{ 'html': 'Edit Experience' }" href="{{ route('experiences.edit', $resource->id) }}">
                                <v-icon>edit</v-icon>
                            </v-btn>
                        </v-card-actions>
                        @endcan

                        <v-card-media src="{{ assets('frontier/images/placeholder/red2.jpg') }}">
                            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>

                            <v-card-text class="text-xs-center">
                                <v-card dark class="elevation-0 transparent py-5">
                                    <div class="title pb-3 white--text"><strong>{{ $resource->name }}</strong></div>
                                    <div class="display-2 white--text"><span class="fw-500">{{ $resource->amount }}</span></div>
                                    <div class="body-2 white--text mb-2">{{ __('per person') }}</span></div>
                                    <div class="mt-4">
                                        @if (user())
                                            <span class="star-rating-system" data-rating="{{ $resource->rating }}"></span>
                                        @else
                                            <span class="star-rating-system--readonly" data-rating="{{ $resource->rating }}"></span>
                                        @endif
                                        <span class="caption">{{ $resource->rating }}</span>
                                    </div>


                                    <div class="text-xs-center">
                                        @include("Experience::cards.pick-a-date")
                                    </div>
                                    {{-- /pick a schedule --}}
                                </v-card>
                            </v-card-text>
                        </v-card-media>
                        <v-divider></v-divider>
                    </v-card>

                    <v-card class="elevation-1 mb-3">
                        <v-list subheader class="py-0">
                            <v-subheader>Frequently Asked Questions</v-subheader>
                            <v-list-tile avatar ripple @click.stop = "resource.faq = true">
                                <v-list-tile-avatar tile>
                                    <img src="{{ assets('frontier/images/public/question.png') }}"/>
                                </v-list-tile-avatar>
                                <v-list-tile-content>
                                    <v-list-tile-title>{{ __('Experience Philippines') }}</v-list-tile-title>
                                    <v-list-tile-sub-title>{{ __('Help Center') }}</v-list-tile-sub-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list>
                    </v-card>
                </div>
            </v-flex>
        </v-layout>

        <v-layout row wrap align-center justify-center>
            <v-flex lg10 sm12 xs12>
                 <!-- @include("Public::parts.similar-listing") -->
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
                        <div class="subheading pl-4"><strong>{{ $resource->amount }}</strong> </div>
                        <v-dialog class="hidden-md-and-up" v-model="dialog.bookexph" fullscreen transition="dialog-bottom-transition" :overlay=false>
                            <v-btn flat small class="body-2 primary--text details-btn" slot="activator">See details</v-btn>
                            <v-card>
                                <v-toolbar light class="white elevation-0">
                                    <v-spacer></v-spacer>
                                    <v-btn icon v-tooltip:left="{ html: 'Close' }" @click="dialog.bookexph = false">
                                        <v-icon>close</v-icon>
                                    </v-btn>
                                </v-toolbar>
                                <v-card-media src="{{ assets('frontier/images/placeholder/red2.jpg') }}">
                                    <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.3); position: absolute; width: 100%; height: 100%;"></div>

                                    <v-card-text class="text-xs-center">
                                        <v-card dark class="elevation-0 transparent py-5">
                                            <div class="title pb-3 white--text"><strong>{{ $resource->name }}</strong></div>
                                            <div class="display-2 white--text"><span class="fw-500">{{ $resource->amount }}</span></div>
                                            <div class="body-2 white--text mb-2">{{ __('per person') }}</span></div>
                                            <div class="mt-4">
                                                @if (user())
                                                    <span class="star-rating-system" data-rating="{{ $resource->rating }}"></span>
                                                @else
                                                    <span class="star-rating-system--readonly" data-rating="{{ $resource->rating }}"></span>
                                                @endif
                                                <span class="caption">{{ $resource->rating }}</span>
                                            </div>

                                        </v-card>
                                        <div class="text-xs-center">
                                            @include("Experience::cards.pick-a-date")
                                        </div>
                                    </v-card-text>
                                </v-card-media>
                            </v-card>
                        </v-dialog>
                    </v-card-text>
                </v-card-actions>
            </v-flex>
        </v-layout>
    </v-card>

    @include("Theme::public.footer")
@endsection

@push('css')
<link rel="stylesheet" href="{{ assets('experience/js/jquery.star-rating-svg.min.css') }}">
    <style>
        .page-text h3 {
            font-size: 20px;
            font-weight: 500;
            line-height: 1;
            margin-top: 2rem;
            margin-bottom: 1.5rem;
        }
        .page-text hr {
            display: block;
            width: 100%;
            height: 1px;
            border: none;
            background-color: rgba(0,0,0,0.09);
            margin: 3rem 0;
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
            .stickybar {
                position: sticky;
                top: 80px;
            }
        }
        iframe {
            width: 100%;
        }

        .pick-sched ul li {
            margin-top: 10px;
        }
        .header .parallax__content {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    </style>
@endpush

@push('pre-scripts')
    <script src="{{ assets('experience/js/jquery.star-rating-svg.min.js') }}"></script>
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                let srcs = {
                    // 1: '{{ assets('frontier/images/placeholder/car.jpg') }}',
                    // 2: '{{ assets('frontier/images/placeholder/car.jpg') }}',
                    // 3: '{{ assets('frontier/images/placeholder/car.jpg') }}',
                    // 4: '{{ assets('frontier/images/placeholder/car.jpg') }}',
                    // 5: '{{ assets('frontier/images/placeholder/car.jpg') }}'
                }
                return {
                    e11: [],
                    e1: 'recent',
                    from: null,
                    to: null,
                    menu: false,
                    dialog: {
                        bookexph: false,
                        dates: false,
                    },
                    resource: {
                        rating: {
                            value: '{{ old('rating') }}',
                        },
                        faq: false
                    },
                }
            },
            mounted () {
                let self = this;
                $('.star-rating-system--readonly').each(function (e) {
                    let rating = $(this).data('rating');
                    $(this).starRating({
                        starSize: 16,
                        totalStars: 5,
                        initialRating: rating,
                        readOnly: true,
                        emptyColor: 'lightgray',
                        activeColor: 'orange',
                        useGradient: false,
                        disableAfterRate: true,
                    });
                });
                $('.star-rating-system').each(function (e) {
                    let rating = $(this).data('rating');
                    $(this).starRating({
                        starSize: 18,
                        totalStars: 5,
                        initialRating: rating,
                        readOnly: false,
                        emptyColor: 'lightgray',
                        activeColor: 'orange',
                        useGradient: false,
                        disableAfterRate: false,
                        callback: function(currentRating, $el){
                            self.resource.rating.value = currentRating;
                        }
                    });
                })
            }
        });
    </script>
@endpush
