<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class mouvementsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mouvements()
    {
        $mouvements = DB::table('movements')
        ->join('articles', 'movements.article_id', '=', 'articles.id')
        ->join('movement_types', 'movement_types.id', '=', 'movements.movement_type_id')
        ->select('articles.name as articleName', 'movements.quantity', 'movements.date_time', 'movement_types.name')
        ->orderBy('date_time')
        ->get();

        return view('mouvements', ['mouvements' => $mouvements]);
    }
}