@yield("pre-utilitybar")

<v-toolbar
    :class="theme.utilitybar"
    class="elevation-1 grey--text"
    fixed
    :dark.sync="light" :light.sync="dark"
>
    <v-toolbar-side-icon class="grey--text text--darken-3" @click.stop="setStorage('sidebar.drawer', (sidebar.drawer = !sidebar.drawer))">
        {{-- <v-icon :dark.sync="dark" :light.sync="light">@{{ sidebar.drawer?'chevron_left':'chevron_right' }}</v-icon> --}}
    </v-toolbar-side-icon>

    @stack("page-title")


    @stack("utilitybar")

    @section("utilitybar-menu")

        <v-btn v-tooltip:right="{ html: 'Dashboard' }" icon>
            <v-icon :light.sync="dark" :dark.sync="light">widgets</v-icon>
        </v-btn>

        <v-menu offset-y>
            <v-btn icon v-tooltip:right="{ html: 'Notifications' }" slot="activator">
                <v-icon
                    :light.sync="dark" :dark.sync="light"
                    medium
                    {{-- v-badge:2.overlap.left --}}
                    {{-- class="light-blue--after" --}}
                    >
                    notifications
                </v-icon>
            </v-btn>
            <v-list>
                <v-list-tile @click="">
                    <v-list-tile-title class="grey--text">{{ __('No notifications') }}</v-list-tile-title>
                </v-list-tile>
            </v-list>
        </v-menu>
        <v-menu offset-y>
            <v-btn icon v-tooltip:right="{ html: 'Priorities' }" slot="activator">
                <v-icon
                    :light.sync="dark" :dark.sync="light"
                    medium
                    {{-- v-badge:2.overlap.left --}}
                    {{-- class="light-blue--after" --}}
                    >
                    flag
                </v-icon>
            </v-btn>
            <v-list>
                <v-list-tile @click="">
                    <v-list-tile-title class="grey--text">{{ __('No priority activities') }}</v-list-tile-title>
                </v-list-tile>
            </v-list>
        </v-menu>
    @show
    <v-spacer></v-spacer>


    {{-- <v-btn icon v-tooltip:left="{ html: 'Search' }" class="grey--text text--darken-3">
        <v-icon>search</v-icon>
    </v-btn> --}}

    {{-- search --}}
    @include("Dashboard::widgets.search")

    {{-- /search --}}

    <v-btn icon @click.native.stop="rightsidebar.model = !rightsidebar.model">
        <v-icon :light.sync="dark" :dark.sync="light">chevron_left</v-icon>
        {{-- <v-icon >chevron_left</v-icon> --}}
    </v-btn icon>
</v-toolbar>

@stack("post-utilitybar")


@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        mixins.push({
            data () {
                return {
                    search: false,
                    notifications: false,
                    sound: true,
                    widgets: false
                };
            },
            beforeDestroy () {
                clearInterval(this.interval)
            },
        })
    </script>
@endpush
