<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"/>
        <script type="text/javascript" src="{{asset('js/app.js')}}" defer></script>
        <title>TutoAntho</title>
    </head>
    <body>
    @include('templates.header')
        <div class="container mx-auto">
            @yield('content')
        </div>
    </body>
</html>
