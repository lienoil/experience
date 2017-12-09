{{-- reply --}}
<v-card class="elevation-1">
    <v-toolbar class="transparent elevation-0">
        <v-toolbar-title>{{ __("1 Review") }}</v-toolbar-title>
    </v-toolbar>
    <v-divider></v-divider>
    <v-card-text class="pa-0 pb-3">
        <v-card-text class="pa-0">
            <v-card class="elevation-0">
                <v-quill v-model="quill.comment"></v-quill>
                <v-divider></v-divider>
                <v-card-text class="text-xs-right pa-0">
                    <v-btn flat class="primary--text">Post a comment</v-btn>
                </v-card-text>
            </v-card>
        </v-card-text>
        <v-divider></v-divider>
        <v-list two-line>
            <v-list-tile avatar>
                <v-list-tile-avatar>
                    <img src="https://placeimg.com/640/480/any" />
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title><a href="#!" class="td-n fw-500 grey--text text--darken-3">Mark Zuckerberg</a></v-list-tile-title>
                    <v-list-tile-sub-title>November 12, 2017</v-list-tile-sub-title>
                </v-list-tile-content>

                <v-list-tile-action>
                    <v-menu bottom left>
                        <v-btn icon flat slot="activator" v-tooltip:left="{ html: 'More Actions' }"><v-icon>more_horiz</v-icon></v-btn>
                        <v-list>
                            <v-list-tile ripple @click="">
                                <v-list-tile-action>
                                    <v-icon accent>report</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>
                                        {{ __('Report') }}
                                    </v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>
                            <v-list-tile ripple @click="">
                                <v-list-tile-action>
                                    <v-icon error>delete</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>
                                        {{ __('Delete') }}
                                    </v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list>
                    </v-menu>
                </v-list-tile-action>
            </v-list-tile>
            <div class="pl-7 pr-4 grey--text text--darken-2">Definitely value for money! Very beautiful view in amazing location. Paul Appleseed was also very helpful. Very recommended!</div>
        </v-list>
    </v-card-text>
    <v-divider></v-divider>
    <v-card-text class="text-xs-right">
        <v-pagination class="caption main-paginate" circle :length="15" v-model="page" :total-visible="7"></v-pagination>
    </v-card-text>
</v-card>

@push('css')
    <link rel="stylesheet" href="{{ assets('frontier/vuetify-quill/dist/vuetify-quill.min.css') }}">
    <style>
        .text-decor-none {
            text-decoration: none;
        }
        .pl-7 {
            padding-left: 70px;
        }
        .comment-field .input-group__input {
            padding-top: 0 !important;
            border: 1px solid #9e9e9e !important;
        }
        .input-group__details {
            display: none;
        }
        .ql-container {
            min-height: 120px !important;
        }
        .quill-editor .ql-editor {
            min-height: auto !important;
        }

        .main-paginate .pagination__item,
        .main-paginate .pagination__navigation {
            box-shadow: none !important;
        }
        .application--light .pagination__item--active {
            background: #03a9f4 !important;
        }
    </style>
@endpush

@push('pre-scripts')
    <script src="{{ assets('frontier/vuetify-quill/dist/vuetify-quill.min.js') }}"></script>
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script src="{{ assets('test/vuetify-mediabox/dist/vuetify-mediabox.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    quill: {
                        comment: {}
                    },
                }
            },
        })
    </script>
@endpush
