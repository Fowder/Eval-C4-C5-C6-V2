<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Movement;

class saisiemouvementController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view()
    {
        $articles = DB::table('articles')->get();
        $movements_type = DB::table('movement_types')->get();
        $directions = DB::table('directions')->get();

        return view('saisiemouvement', ['articles' => $articles, 'movement_types' => $movements_type, 'directions' => $directions]);
    }

    public function create(Request $request)
    {
        $movements = new Movement;

        $movements-> quantity = request('quantite');
        $movements-> article_id = request('article');
        $movements-> movement_type_id = request('type');
        
        $movements->save();

        return redirect()->route('welcome');
    }
}