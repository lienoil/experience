@extends("Theme::layouts.auth")
@section("head-title", __($application->page->title))
@section("page-title", __($application->page->title))

@section("content")
    <v-card class="elevation-1 sticky">
        <v-toolbar class="elevation-0 white">
            @include("Public::sections.nav")
        </v-toolbar>
    </v-card>

    <v-container fluid grid-list-lg>
        <v-layout row wrap justify-center align-top>
            <v-flex md10 xs12>
                <v-layout row wrap>
                    <v-flex md3 sm4 xs12>
                        <v-card class="elevation-1">
                            <v-list class="py-0">
                                <v-list-tile ripple href="\notifications">
                                    <v-list-tile-action>
                                        <v-icon>notifications</v-icon>
                                    </v-list-tile-action>
                                    <v-list-tile-content>
                                        <v-list-tile-title>
                                            {{ __('Notifications') }}
                                        </v-list-tile-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                                <v-list-tile ripple href="\transactions">
                                    <v-list-tile-action>
                                        <v-icon>credit_card</v-icon>
                                    </v-list-tile-action>
                                    <v-list-tile-content>
                                        <v-list-tile-title>
                                            {{ __('Transaction History') }}
                                        </v-list-tile-title>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list>
                        </v-card>
                    </v-flex>

                    <v-flex md9 sm8 xs12>
                        <v-card class="elevation-1">
                            <v-data-table
                                v-bind:headers="headers"
                                :items="items"
                                hide-actions
                                class="elevation-1"
                                >
                                <template slot="items" slot-scope="props">
                                    <td>@{{ props.item.name }}</td>
                                    <td class="text-xs-right">@{{ props.item.calories }}</td>
                                    <td class="text-xs-right">@{{ props.item.fat }}</td>
                                    <td class="text-xs-right">@{{ props.item.carbs }}</td>
                                    <td class="text-xs-right">@{{ props.item.protein }}</td>
                                    <td class="text-xs-right">@{{ props.item.sodium }}</td>
                                    <td class="text-xs-right">@{{ props.item.calcium }}</td>
                                    <td class="text-xs-right">@{{ props.item.iron }}</td>
                                </template>
                            </v-data-table>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>

    @include("Public::sections.footer")
@endsection

@push('pre-scripts')
    <script src="{{ assets('frontier/vendors/vue/resource/vue-resource.min.js') }}"></script>
    <script>
        Vue.use(VueResource);

        mixins.push({
            data () {
                return {
                    n1: null,
                    n2: null,
                    n3: null,
                    headers: [
                        {
                            text: 'Dessert (100g serving)',
                            align: 'left',
                            sortable: false,
                            value: 'name'
                        },
                        { text: 'Calories', value: 'calories' },
                        { text: 'Fat (g)', value: 'fat' },
                        { text: 'Carbs (g)', value: 'carbs' },
                        { text: 'Protein (g)', value: 'protein' },
                        { text: 'Sodium (mg)', value: 'sodium' },
                        { text: 'Calcium (%)', value: 'calcium' },
                        { text: 'Iron (%)', value: 'iron' }
                    ],
                    items: [
                        {
                            value: false,
                            name: 'Frozen Yogurt',
                            calories: 159,
                            fat: 6.0,
                            carbs: 24,
                            protein: 4.0,
                            sodium: 87,
                            calcium: '14%',
                            iron: '1%'
                        },
                        {
                            value: false,
                            name: 'Ice cream sandwich',
                            calories: 237,
                            fat: 9.0,
                            carbs: 37,
                            protein: 4.3,
                            sodium: 129,
                            calcium: '8%',
                            iron: '1%'
                        },
                      {
                        value: false,
                        name: 'Eclair',
                        calories: 262,
                        fat: 16.0,
                        carbs: 23,
                        protein: 6.0,
                        sodium: 337,
                        calcium: '6%',
                        iron: '7%'
                      },
                      {
                        value: false,
                        name: 'Cupcake',
                        calories: 305,
                        fat: 3.7,
                        carbs: 67,
                        protein: 4.3,
                        sodium: 413,
                        calcium: '3%',
                        iron: '8%'
                      },
                      {
                        value: false,
                        name: 'Gingerbread',
                        calories: 356,
                        fat: 16.0,
                        carbs: 49,
                        protein: 3.9,
                        sodium: 327,
                        calcium: '7%',
                        iron: '16%'
                      },
                      {
                        value: false,
                        name: 'Jelly bean',
                        calories: 375,
                        fat: 0.0,
                        carbs: 94,
                        protein: 0.0,
                        sodium: 50,
                        calcium: '0%',
                        iron: '0%'
                      },
                      {
                        value: false,
                        name: 'Lollipop',
                        calories: 392,
                        fat: 0.2,
                        carbs: 98,
                        protein: 0,
                        sodium: 38,
                        calcium: '0%',
                        iron: '2%'
                      },
                      {
                        value: false,
                        name: 'Honeycomb',
                        calories: 408,
                        fat: 3.2,
                        carbs: 87,
                        protein: 6.5,
                        sodium: 562,
                        calcium: '0%',
                        iron: '45%'
                      },
                      {
                        value: false,
                        name: 'Donut',
                        calories: 452,
                        fat: 25.0,
                        carbs: 51,
                        protein: 4.9,
                        sodium: 326,
                        calcium: '2%',
                        iron: '22%'
                      },
                      {
                        value: false,
                        name: 'KitKat',
                        calories: 518,
                        fat: 26.0,
                        carbs: 65,
                        protein: 7,
                        sodium: 54,
                        calcium: '12%',
                        iron: '6%'
                      }
                    ]
                }
            },
        });
    </script>
@endpush

