<section id="review">
<v-card class="elevation-0 transparent hidden-sm-and-down">
    <v-parallax class="mb-4 mt-5 " height="450" src="{{ assets('frontier/images/public/h10.jpg') }}">
        <v-layout
            column
            align-center
            justify-center
            class="white--text"
            >
            <div class="insert-overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; width: 100%; height: 100%; top: 0;"></div>
        </v-layout>
    </v-parallax>
    <v-card dark class="elevation-0 transparent card--flex">
        <v-layout row wrap align-center justify-center>
            <v-flex md3 xs12>
                <h4>Happy Traveller</h4>
            </v-flex>
            <v-flex md9 xs12>
                <v-container fluid grid-list-lg>
                    <v-layout row wrap>
                        <v-flex md3 xs12>
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src="{{ assets('frontier/images/placeholder/8.jpg') }}"
                                    class="grey lighten-4">
                                </v-card-media>
                                <div class="text-xs-center">
                                    <v-avatar size="80px" class="">
                                        <img src="{{ assets('frontier/images/placeholder/woman.jpg') }}" alt="">
                                    </v-avatar>
                                </div>
                                <v-card-text>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, odio, velit repellendus repudiandae laborum est sit fugit perspiciatis laboriosam error deserunt aliquid voluptatem, hic sint! Temporibus, est. Assumenda, cupiditate, nam!
                                </v-card-text>
                            </v-card>
                        </v-flex>

                        <v-flex md3 xs12>
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src="{{ assets('frontier/images/placeholder/8.jpg') }}"
                                    class="grey lighten-4">
                                </v-card-media>
                                <v-card-text>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, odio, velit repellendus repudiandae laborum est sit fugit perspiciatis laboriosam error deserunt aliquid voluptatem, hic sint! Temporibus, est. Assumenda, cupiditate, nam!
                                </v-card-text>
                            </v-card>
                        </v-flex>

                        <v-flex md3 xs12>
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src="{{ assets('frontier/images/placeholder/8.jpg') }}"
                                    class="grey lighten-4">
                                </v-card-media>
                                <v-card-text>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, odio, velit repellendus repudiandae laborum est sit fugit perspiciatis laboriosam error deserunt aliquid voluptatem, hic sint! Temporibus, est. Assumenda, cupiditate, nam!
                                </v-card-text>
                            </v-card>
                        </v-flex>

                        <v-flex md3 xs12>
                            <v-card class="elevation-1">
                                <v-card-media
                                    height="180px"
                                    src="{{ assets('frontier/images/placeholder/8.jpg') }}"
                                    class="grey lighten-4">
                                </v-card-media>
                                <v-card-text>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, odio, velit repellendus repudiandae laborum est sit fugit perspiciatis laboriosam error deserunt aliquid voluptatem, hic sint! Temporibus, est. Assumenda, cupiditate, nam!
                                </v-card-text>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-flex>
        </v-layout>
    </v-card>
</v-card>

{{-- Small viewport --}}
<v-card dark class="elevation-0 transparent hidden-md-and-up">
    <v-layout row wrap align-center justify-center>
        <v-flex md3 xs12>
            <h4>Happy Traveller</h4>
        </v-flex>
        <v-flex md9 xs12>
            <v-container fluid grid-list-lg>
                <v-layout row wrap>
                    <v-flex md4 sm4 xs12>
                        <v-card class="elevation-1">
                            <v-card-media
                                height="180px"
                                src="{{ assets('frontier/images/placeholder/8.jpg') }}"
                                class="grey lighten-4">
                            </v-card-media>
                            <v-card-text>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, odio, velit repellendus repudiandae laborum est sit fugit perspiciatis laboriosam error deserunt aliquid voluptatem, hic sint! Temporibus, est. Assumenda, cupiditate, nam!
                            </v-card-text>
                        </v-card>
                    </v-flex>

                    <v-flex md4 sm4 xs12>
                        <v-card class="elevation-1">
                            <v-card-media
                                height="180px"
                                src="{{ assets('frontier/images/placeholder/8.jpg') }}"
                                class="grey lighten-4">
                            </v-card-media>
                            <v-card-text>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, odio, velit repellendus repudiandae laborum est sit fugit perspiciatis laboriosam error deserunt aliquid voluptatem, hic sint! Temporibus, est. Assumenda, cupiditate, nam!
                            </v-card-text>
                        </v-card>
                    </v-flex>

                    <v-flex md4 sm4 xs12>
                        <v-card class="elevation-1">
                            <v-card-media
                                height="180px"
                                src="{{ assets('frontier/images/placeholder/8.jpg') }}"
                                class="grey lighten-4">
                            </v-card-media>
                            <v-card-text>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, odio, velit repellendus repudiandae laborum est sit fugit perspiciatis laboriosam error deserunt aliquid voluptatem, hic sint! Temporibus, est. Assumenda, cupiditate, nam!
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-flex>
    </v-layout>
</v-card>
</section>

@push('css')
    <style>
        .card--flex {
            margin-top: -300px;
        }
    </style>
@endpush
