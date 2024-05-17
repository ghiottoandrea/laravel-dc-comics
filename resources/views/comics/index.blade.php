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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body class="comics_page">

    <div class="container">
        <div class="row">

            <div class="d-flex align-items-center text-center">

                <div class="col-1">
                    Id
                </div>

                <div class="col-2">
                    Copertina
                </div>

                <div class="col-3">
                    Titolo
                </div>

                <div class="col-2">
                    Serie
                </div>

                <div class="col-1">
                    Tipo
                </div>

                <div class="col-1">
                    Prezzo
                </div>

                <div class="col-2">

                </div>

            </div>
            <hr>


            @foreach ($comics as $comic)

            <div class="d-flex align-items-center text-center">

                <div class="col-1">
                    {{$comic->id}}
                </div>

                <div class="col-2">
                    <img class="w-50 m-2" src="{{$comic->thumb}}" alt="">
                </div>

                <div class="col-3">
                    {{$comic->title}}
                </div>

                <div class="col-2">
                    {{$comic->series}}
                </div>

                <div class="col-1">
                    {{$comic->type}}
                </div>

                <div class="col-1">
                    {{$comic->price}}
                </div>

                <div class="col-2">
                    <a href="{{ route('comics.show', $comic) }}"
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </div>

            </div>
            <hr>
            @endforeach

        </div>

    </div>

</body>

</html