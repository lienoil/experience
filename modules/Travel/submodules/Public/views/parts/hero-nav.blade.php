<div class="hidden-lg-and-up">
    <v-menu
        transition="slide-x-transition"
        bottom
        right
        :nudge-width="200"
        >
        <v-btn icon slot="activator" v-tooltip:bottom="{html:'Menu'}"><v-icon>keyboard_arrow_down</v-icon></v-btn>
        <v-list>
            <v-list-tile ripple href="\experiences">
                <v-list-tile-title>Experience</v-list-tile-title>
            </v-list-tile>
            <v-list-tile ripple href="\experiences">
                <v-list-tile-title>Road Trips</v-list-tile-title>
            </v-list-tile>
            <v-list-tile ripple @click="">
                <v-list-tile-title>Pack &amp; Go</v-list-tile-title>
            </v-list-tile>
            <v-list-tile ripple href="\stories">
                <v-list-tile-title>Stories</v-list-tile-title>
            </v-list-tile>
            <v-divider></v-divider>
            <v-list-tile ripple href="\login">
                <v-list-tile-title>Log in</v-list-tile-title>
            </v-list-tile>
            <v-list-tile ripple href="\register">
                <v-list-tile-title>Register</v-list-tile-title>
            </v-list-tile>
        </v-list>
    </v-menu>
</div>
<v-spacer></v-spacer>
<div class="hidden-md-and-up">
    <v-dialog v-model="dialog.search" fullscreen transition="dialog-bottom-transition" :overlay=false>
        <v-btn icon slot="activator" v-tooltip:bottom="{html: 'Search'}"><v-icon>search</v-icon></v-btn>
        <v-card>
            <v-toolbar dark class="elevation-1">
                <v-btn icon @click.native="dialog.search = false" dark>
                    <v-icon>close</v-icon>
                </v-btn>
                <v-toolbar-title>Settings</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items>
                    <v-btn dark flat @click.native="dialog.search = false">Save</v-btn>
                </v-toolbar-items>
            </v-toolbar>
        </v-card>
    </v-dialog>
</div>

<div class="hidden-md-and-down">
    <v-btn href="\experiences" flat>{{ __('Experience') }}</v-btn>
    <v-btn href="\experiences"flat>{{ __('Roadtrip') }}</v-btn>
    <v-btn href=""flat>{{ __('Pack &amp; Go') }}</v-btn>
    <v-btn href="\stories"flat>{{ __('Stories') }}</v-btn>
    <v-btn href="\login"flat>{{ __('Login') }}</v-btn>
    <v-btn href="\register"flat>{{ __('Register') }}</v-btn>
</div>

@push('pre-scripts')
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    dialog: {
                        search: false
                    },
                }
            }
        })
    </script>
@endpush
