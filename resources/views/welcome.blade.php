<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

        </style>
    </head>
    <body>

        <nav class="nav navbar-default">
            {!! menu('topbar','bootstrap') !!}
        </nav>

        <div class="container" style="margin-top: 100px">
            <div class="row text-center">
                <div class="col-md-8">
                    <h1>Laravel5.5</h1>
                    <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="logo">
                    <h3>{{ setting('site.title') }}</h3>
                    <p> {{ setting('general.description') }}</p>
                </div>

            </div>
        </div>

        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
