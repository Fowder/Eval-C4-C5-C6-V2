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
        <div class="content">
            <div class="title m-b-md">
                Mouvements
            </div>
            <h3>Historique</h3>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nom article</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Date</th>
                    <th scope="col">Type de mouvement</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mouvements as $mouvement)
                        <tr>
                            <td>{{ $mouvement->articleName }}</td>
                            <td>{{ $mouvement->quantity }}</td>
                            <td>{{ $mouvement->date_time }}</td>
                            <td>{{ $mouvement->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>