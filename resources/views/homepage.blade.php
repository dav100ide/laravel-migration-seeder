<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>treni</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <h1>treni</h1>
            <ul>
                @foreach ($trains as $train)
                    <li>
                         {{$train->train_code}}
                         {{ $train->departure_station }} - {{$train->arrival_station}}
                    </li>
                @endforeach
            </ul>
        </div>
    </main>

</body>

</html>
