@extends("Frontier::layouts.admin")

@section("content")
    <v-container fluid grid-list-lg>
        <form action="{{ route('pages.store') }}" method="POST">
            {{ csrf_field() }}
            <v-layout row wrap>
                <v-flex xs23>
                    <v-card class="elevation-1">
                        <v-toolbar card class="transparent">
                            <v-toolbar-title>{{ __('New Page') }}</v-toolbar-title>
                        </v-toolbar>
                        <v-card-text>
                            <v-layout row wrap>
                                <v-flex xs4>
                                    <v-subheader>{{ __('Title') }}</v-subheader>
                                </v-flex>
                                <v-flex xs8>
                                    <v-text-field
                                        name="title"
                                        label="{{ __('Title') }}"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-layout row wrap>
                                <v-flex xs4>
                                    <v-subheader>{{ __('Slug') }}</v-subheader>
                                </v-flex>
                                <v-flex xs8>
                                    <v-text-field
                                        name="slug"
                                        label="{{ __('Slug') }}"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>
                            <div class="text-xs-right">
                                <v-btn primary type="submit">{{ __('Save') }}</v-btn>
                            </div>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </form>
    </v-container>
@endsection
