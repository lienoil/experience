@extends("User::auth.login")

@push("pre-js")
    <script src="{{ theme('js/fb-exph.js') }}"></script>
    {{-- <script>
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    </script> --}}
@endpush
