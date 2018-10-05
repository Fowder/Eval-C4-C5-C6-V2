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
                    Gestion des stocks
                </div>

                <div class="links">
                    <a href="/statistiques">Statistiques</a>
                    <a href="/mouvements">Historique</a>
                    <a href="/saisiemouvement">Saisie de mouvement</a>
                    <a href="/listearticle">Liste articles</a>
                    <a href="{{ route('create-article') }}">Création article</a>
                    <a href="{{ route('selectModifArticle') }}">Modification article</a>
                </div>
            </div>
        </div>
    </body>
</html>
