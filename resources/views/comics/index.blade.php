<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="comics_page">

    <div class="container">
        <div class="row">

        @foreach ($comics as $comic)
            <div class="col-2">

                <img class="w-100 mt-3" src="{{$comic->thumb}}" alt="">
                <span>{{$comic->title}}</span>

            </div>
            
        @endforeach

        </div>
    </div>

</body>

</html