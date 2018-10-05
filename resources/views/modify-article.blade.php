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
                    @if(isset($article))
                        Modification article {{ $article->name }}
                    @else
                        Création article
                    @endif
                </div>
                @if(isset($article))
                    <form method="post" enctype="multipart/form-data" action="{{ action('listearticleController@modify', [$article->id]) }}">
                @else
                    <form method="post" enctype="multipart/form-data" action="{{ action('listearticleController@create') }}">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        @if(isset($article))
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" value="{{ $article->name }}">
                        @else
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category">Categorie</label>
                        @if(isset($article))
                            <select class="form-control" name="category" id="category">
                                <option value="{{ $thisCategory->id }}" selected>{{ $thisCategory->name }}</option>
                                @foreach($categories as $category)
                                    @if($thisCategory->id == $category->id)

                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        @else
                            <select class="form-control" name="category" id="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="unite">Unité</label>
                        @if(isset($article))
                            <select class="form-control" name="unite" id="unite">
                                <option value="{{ $thisUnite->id }}" selected>{{ $thisUnite->name }}</option>
                                @foreach($unites as $unite)
                                    @if($thisUnite->id == $unite->id)

                                    @else
                                        <option value="{{ $unite->id }}">{{ $unite->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        @else
                            <select class="form-control" name="unite" id="unite">
                                @foreach($unites as $unite)
                                    <option value="{{ $unite->id }}">{{ $unite->name }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="sales">Prix de vente</label>
                        @if(isset($article))
                            <input type="number" name="sales" class="form-control" id="sales" placeholder="sales" value="{{ $article->sales_price }}">
                        @else
                            <input type="number" name="sales" class="form-control" id="sales" placeholder="Prix de vente">
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>