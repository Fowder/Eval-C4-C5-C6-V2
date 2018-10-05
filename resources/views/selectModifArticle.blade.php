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
                    Choix de l'article à modifier
                </div>

                <div class="links">
                    <form method="post" enctype="multipart/form-data" action="{{ action('selectModifArticleController@modify') }}">
                    @csrf
                    <div class="form-group">
                        <label for="article">Choix de l'article à modifier</label>
                        <select class="form-control" name="article" id="article">
                            @foreach ($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
