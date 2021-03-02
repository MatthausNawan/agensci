<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ExternalLik;
use Illuminate\Http\Request;

class TeacherController extends Controller
{




     // Area Administrativa
     public function home()
     {

         return view(
             'frontend.pages.teachers.painel',
             [
                 'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
             ]
         );

     }
}
