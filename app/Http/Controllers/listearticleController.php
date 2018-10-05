<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class listearticleController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function articles()
    {
        $articles = DB::table('articles')->get();

        return view('listearticle', ['articles' => $articles]);
    }

    public function delete_article($id)
    {
        $verifyExist = DB::table('movements')->where('article_id', '=', $id)->first();
        if($verifyExist){
            return redirect()->route('impossible', $id);
        }else{
            $delete = DB::table('articles')->where('id', '=', $id)->delete();
            return redirect()->route('welcome');
        }
    }

    public function viewmodify($id)
    {
        $article = DB::table('articles')->where('id', '=', $id)->first();
        $categories = DB::table('categories')->get();
        $thisCategory = DB::table('articles')->join('categories', 'categories.id', '=', 'articles.category_id')->where('articles.id', '=', $id)->first();
        $unites = DB::table('units')->get();
        $thisUnite = DB::table('articles')->join('units', 'units.id', '=', 'articles.unit_id')->where('articles.id', '=', $id)->first();

        return view('modify-article', ['article' => $article, 'categories' => $categories, 'thisCategory' => $thisCategory, 'unites' => $unites, 'thisUnite' => $thisUnite]);
    }

    public function create_article()
    {
        $categories = DB::table('categories')->get();
        $unites = DB::table('units')->get();

        return view('modify-article', ['categories' => $categories, 'unites' => $unites]);
    }

    public function create()
    {
        $insert = DB::table('articles')->insert(['name' => request('nom'), 'category_id' => request('category'), 'unit_id' => request('unite'), 'sales_price' => request('sales')]);

        return redirect()->route('welcome');
    }

    public function modify($id)
    {
        $update = DB::table('articles')->where('id', '=', $id)->update(['name' => request('nom'), 'category_id' => request('category'), 'unit_id' => request('unite'), 'sales_price' => request('sales')]);

        return redirect()->route('welcome');
    }
}