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
                    Liste des articles <a class="btn btn-primary" href="{{ route('create-article') }}">Ajouter article</a>
                </div>
                <div class="container">
                    <div class="row justify-content-md-center">
                    @foreach ($articles as $article)
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <a href="{{ route('modify-article', [$article->id]) }}"><h5 class="card-title">{{ $article->name }}</h5></a>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $article->sales_price }}</h6>
                                <a href="{{ route('delete-article', [$article->id]) }}" class="card-link">Supprimer</a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>