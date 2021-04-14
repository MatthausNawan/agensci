<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Event;
use App\Models\ExternalLik;
use App\Models\Headline;
use App\Models\Job;
use App\Models\Post;
use App\Models\Promotion;
use App\Models\Segment;
use App\Models\Speaker;
use App\Models\StudentProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view(
            'frontend.pages.home.index',
            [
                'articles' => ExternalLik::where('category_id', Category::C_ARTIGOS)->get(),
                'uni_publicas' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_PUBLICAS)->take(4)->get(),
                'uni_privadas' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_PRIVADAS)->take(4)->get(),
                'uni_internacionais' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_INTERNACIONAIS)->take(4)->get(),
                'orgaos_educacionais' => ExternalLik::where('category_id', Category::C_ORGAOS_EDUCACIONAIS)->get(),
                'orgaos_pesquisas' => ExternalLik::where('category_id', Category::C_ORGAOS_DE_PESQUISA)->get(),
                'segments' => Segment::all(),
                'categories' => Category::all(),
                'se' => Segment::whereHas('events')->get(),
                'events' => Event::whereHas('segment')->get()->groupBy('segment_id'),
                'machete_cientifica' => Headline::where('type', Headline::TYPE_MAGAZINE)->latest()->first(),
                'site_cientifica' => Headline::where('type', Headline::TYPE_SITE)->latest()->first(),
                'featured_event' => Event::latest()->first()
            ]
        );
    }

    public function showTeachersPage()
    {
        return view('frontend.pages.teachers.index', [
            'laboratorios' => ExternalLik::where("category_id", Category::C_LABORATORIOS_DE_PESQUISAS)->take(4)->get(),
            'ongs' => ExternalLik::where("category_id", Category::C_ONGS)->take(4)->get(),
            'sociedades' => ExternalLik::where("category_id", Category::C_SOCIEDADES)->take(4)->get(),
            'conselhos' => ExternalLik::where("category_id", Category::C_CONSELHOS_DE_CLASSE)->take(4)->get(),
            'segments' => Segment::all(),
            'categories' => Category::all(),
            'news' => Post::all(),
            'calls' => Post::all(),
            'speakers' => Speaker::all(),
        ]);
    }

    public function showStudentsPage()
    {
        return view('frontend.pages.students.index', [
            'cursos' => ExternalLik::where("category_id", Category::C_CURSOS)->take(4)->get(),
            'entidades' => ExternalLik::where("category_id", Category::C_ENTIDADES_ESTUDANTIS)->take(4)->get(),
            'bibliotecas' => ExternalLik::where("category_id", Category::C_BIBLIOTECAS_DIGITAIS)->take(4)->get(),
            'museus' => ExternalLik::where("category_id", Category::C_MUSEUS_DIGITAIS)->take(4)->get(),
            'segments' => Segment::all(),
            'categories' => Category::all(),
            'se' => Segment::whereHas('events')->get(),
            'news' => Post::all(),
            'jobs' => Job::all(),
            'profiles' => StudentProfile::all()
        ]);
    }

    public function showCompaniesPage()
    {
        return view('frontend.pages.companies.index', [
            'laboratorios' => ExternalLik::where("category_id", Category::C_LABORATORIOS_DE_PESQUISAS)->take(4)->get(),
            'ongs' => ExternalLik::where("category_id", Category::C_ONGS)->take(4)->get(),
            'sociedades' => ExternalLik::where("category_id", Category::C_SOCIEDADES)->take(4)->get(),
            'conselhos' => ExternalLik::where("category_id", Category::C_CONSELHOS_DE_CLASSE)->take(4)->get(),
            'segments' => Segment::all(),
            'categories' => Category::all(),
            'news' => Post::all(),
            'calls' => Post::all(),
        ]);
    }



    public function showAdvertisePage()
    {
        return view('frontend.pages.advertise.index');
    }
}
