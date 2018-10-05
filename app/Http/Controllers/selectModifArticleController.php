<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Movement;

class selectModifArticleController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view()
    {
        $articles = DB::table('articles')->get();

        return view('selectModifArticle', ['articles' => $articles]);
    }

    public function modify()
    {
        $id = request('article');

        return redirect()->route('modify-article', $id);
    }
}