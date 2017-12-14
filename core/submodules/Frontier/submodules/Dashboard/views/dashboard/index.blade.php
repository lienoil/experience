@extends("Theme::layouts.admin")

@section("content")
    @include("Theme::partials.banner")

    {{-- @can('view-mainanalytics') --}}
    @include("Dashboard::widgets.stat")
    {{-- @endcan --}}

    <v-container fluid grid-list-lg>
        <v-layout row wrap>
            <v-flex xs12>
                <v-layout row wrap>
                    <v-flex md4 xs12>
                        <v-layout row wrap>
                            <v-flex xs12>
                                <draggable
                                    class="sortable-container"
                                    :options="{animation: 150, handle: '.sortable-handle', group: 'lessons', draggable: '.draggable-lesson', forceFallback: true}">

                                    @can('view-area')
                                    <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                        @include("Dashboard::widgets.area")
                                    </v-card>
                                    @endcan

                                    @can('view-bar_st')
                                    <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                       @include("Dashboard::widgets.bar_st")
                                    </v-card>
                                    @endcan

                                    @can('view-donut_t')
                                    <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                       @include("Dashboard::widgets.donut_t")
                                    </v-card>
                                    @endcan

                                    @can('view-assignments')
                                    <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                       @include("Assignment::widgets.assignment")
                                    </v-card>
                                    @endcan

                                   <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                       @include("Dashboard::widgets.todo-list")
                                   </v-card>
                                </draggable>
                            </v-flex>
                        </v-layout>
                    </v-flex>

                    <v-flex md4 xs12>
                        <draggable
                            class="sortable-container"
                            :options="{animation: 150, handle: '.sortable-handle', group: 'lessons', draggable: '.draggable-lesson', forceFallback: true}">
                                @can('view-donut')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                    @include("Dashboard::widgets.donut")
                                </v-card>
                                @endcan

                                @can('view-area_st')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                   @include("Dashboard::widgets.area_st")
                                </v-card>
                                @endcan

                                @can('view-bar_t')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                   @include("Dashboard::widgets.bar_t")
                                </v-card>
                                @endcan

                                @can('view-announcements')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                    @include("Announcement::widgets.announcement")
                                </v-card>
                                @endcan
                       </draggable>
                    </v-flex>

                    <v-flex md4 xs12>
                        <draggable
                            class="sortable-container"
                            :options="{animation: 150, handle: '.sortable-handle', group: 'lessons', draggable: '.draggable-lesson', forceFallback: true}">
                                @can('view-bar')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                    @include("Dashboard::widgets.bar")
                                </v-card>
                                @endcan

                                @can('view-donut_st')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                   @include("Dashboard::widgets.donut_st")
                                </v-card>
                                @endcan

                                @can('view-area_t')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                   @include("Dashboard::widgets.area_t")
                                </v-card>
                                @endcan

                                @can('view-activities')
                                <v-card class="draggable-lesson elevation-0 transparent" v-for="(draggable, key) in draggables.items">
                                    @include("Dashboard::widgets.activities")
                                </v-card>
                               @endcan
                       </draggable>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>
@endsection

@push('css')
    <style>
        .inline {
            display: inline-block;
        }
        .overlay-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        .media .card__text,
        .top-level {
            z-index: 1;
        }
        .weight-600 {
            font-weight: 600 !important;
        }
        .progress-circular{
            margin: 1rem;
        }
        .sortable-container {
            background: rgb(236, 240, 245);
        }

        .w--500 {
            font-weight: 500 !important;
        }
    </style>
@endpush

@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/draggable/sortable.min.js') }}"></script>
    <script src="{{ assets('frontier/vendors/vue/draggable/draggable.min.js') }}"></script>
    <script src="{{ assets('frontier/vuetify-mediabox/dist/vuetify-mediabox.min.js') }}"></script>
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    draggables: {
                        items: [
                        {
                            name: 'yas', active: 'true'
                        }
                        ],
                    },
                }
            },
            beforeDestroy () {
                clearInterval(this.interval)
            },
        })
    </script>
@endpush
