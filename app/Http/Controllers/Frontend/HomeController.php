<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Event;
use App\Models\ExternalLik;
use App\Models\Headline;
use App\Models\Segment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view(
            'frontend.pages.home.index',
            [
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
                'uni_publicas' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_PUBLICAS)->get(),
                'uni_privadas' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_PRIVADAS)->get(),
                'uni_internacionais' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_INTERNACIONAIS)->get(),
                'orgaos_educacionais' => ExternalLik::where('category_id', Category::C_ORGAOS_EDUCACIONAIS)->get(),
                'orgaos_pesquisas' => ExternalLik::where('category_id', Category::C_ORGAOS_DE_PESQUISA)->get(),
                'segments' => Segment::all(),
                'categories' => Category::all(),
                'se' => Segment::whereHas('events')->get(),
                'events' => Event::whereHas('segment')->get()->groupBy('segment_id')
            ]
        );
    }
}
