@extends("Theme::layouts.admin")

@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")

@include("Theme::partials.banner")

<v-container fluid>
    <v-layout row wrap>
        <v-flex xs12>
            <v-card class="elevation-1">
                <v-card-text>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quisquam, porro saepe doloribus libero ipsum incidunt, assumenda! Natus explicabo, a sunt magni aliquid quo dicta delectus, odio inventore assumenda ad!
                </v-card-text>
            </v-card>
        </v-flex>
    </v-layout>
</v-container>

@endsection
