<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Bjørn Lindholm') }}</title>

        <script src="https://use.typekit.net/jpv1qlz.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        {{-- @include('sections.navigation') --}}

        @include('sections.hero')



        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
