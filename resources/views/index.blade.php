<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Bjørn Lindholm') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        @include('sections.navigation')

        @include('sections.hero')



    </body>
</html>
