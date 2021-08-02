<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function ajaxCidades(Request $request)
    {
        return DB::table('cities')->where('uf', $request->uf)->get();
    }
}
