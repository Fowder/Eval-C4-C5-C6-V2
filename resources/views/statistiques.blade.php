<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Statistiques
                </div>
                <h3>Valeur totale du stock</h3>
                <p>{{ $total->total_value }}</p>
                <h3>Valeur par catégorie</h3>
                @foreach($categoryValue as $categories)
                <p>{{ $categories->category }} : {{ $categories->total_value }}</p>
                @endforeach
            </div>
        </div>
    </body>
</html>