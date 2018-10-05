<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class statistiquesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function totalValue()
    {
        $total = DB::table('total_value')->first();
        $categoryValue = DB::table('category_value')->get();

        return view('statistiques', ['total' => $total, 'categoryValue' => $categoryValue]);
    }
}