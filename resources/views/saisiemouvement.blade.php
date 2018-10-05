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
                    Saisie de mouvement
                </div>
                <form method="post" enctype="multipart/form-data" action="{{ action('saisiemouvementController@create') }}">
                    @csrf
                    <div class="form-group">
                        <label for="quantite">Quantité</label>
                        <input type="number" name="quantite" class="form-control" id="quantite" placeholder="Quantité">
                    </div>
                    <div class="form-group">
                        <label for="article">Article</label>
                        <select class="form-control" name="article" id="article">
                            @foreach ($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sens">Sens de mouvement</label>
                        <select class="form-control" name="sens" id="sens">
                            @foreach ($directions as $direction)
                            <option value="{{ $direction->id }}">{{ $direction->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="type">Type de mouvement</label>
                        <select class="form-control" name="type" id="type">
                            @foreach ($movement_types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>