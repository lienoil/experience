@extends("Frontier::layouts.admin")

@section("content")
    <v-container fluid grid-list-lg>
        <v-card class="grey lighten-4 elevation-1">
        </v-card>
    </v-container>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ assets('calendar/dist/calendar/Calendar.css') }}">
@endpush

@push('pre-scripts')
    <script src="{{ assets('calendar/dist/calendar/Calendar.js') }}"></script>
    <script>
        Vue.use(Calendar);

        mixins.push({
            components: {calendar: Calendar},
            data () {
                return {
                    events: [{
                        date: '2017/09/22',
                        title: 'Foo',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum modi quos, nesciunt aperiam dolores! Corporis, sit, molestiae. Deserunt, quas. Autem illum veniam, maiores consectetur cumque velit odio at. Soluta.'
                      },{
                        date: '2017/09/12',
                        title: 'Bar'
                      }],
                };
            }
        });
    </script>
@endpush
