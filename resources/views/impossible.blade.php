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
                    Liste des articles
                </div>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="alert alert-danger" role="alert">
                            Impossible d'exécuter cette action
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>