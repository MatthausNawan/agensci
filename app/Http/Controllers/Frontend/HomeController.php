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
                'uni_publicas' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_PUBLICAS)->get(),
                'uni_privadas' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_PRIVADAS)->get(),
                'uni_internacionais' => ExternalLik::where('category_id', Category::C_UNIVERSIDADES_INTERNACIONAIS)->get(),
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
            'laboratorios' => ExternalLik::where("category_id", Category::C_LABORATORIOS_DE_PESQUISAS)->get(),
            'ongs' => ExternalLik::where("category_id", Category::C_ONGS)->get(),
            'sociedades' => ExternalLik::where("category_id", Category::C_SOCIEDADES)->get(),
            'conselhos' => ExternalLik::where("category_id", Category::C_CONSELHOS_DE_CLASSE)->get(),
            'segments' => Segment::all(),
            'categories' => Category::all(),
            'news' => Post::all(),
            'calls' => Post::all(),
            'speakers' => Speaker::all(),
        ]);
    }

    public function registerTeacherPage(){
        return view('frontend.pages.teachers.register', []);
    }

    public function showStudentsPage()
    {
        return view('frontend.pages.students.index', [
            'cursos' => ExternalLik::where("category_id", Category::C_CURSOS)->get(),
            'entidades' => ExternalLik::where("category_id", Category::C_ENTIDADES_ESTUDANTIS)->get(),
            'bibliotecas' => ExternalLik::where("category_id", Category::C_BIBLIOTECAS_DIGITAIS)->get(),
            'museus' => ExternalLik::where("category_id", Category::C_MUSEUS_DIGITAIS)->get(),
            'segments' => Segment::all(),
            'categories' => Category::all(),
            'se' => Segment::whereHas('events')->get(),
            'news' => Post::all(),
            'jobs' => Job::all(),
            'profiles' => StudentProfile::all()
        ]);
    }

    public function registerStudentPage(){
        return view('frontend.pages.students.register', []);
    }

    public function showCompaniesPage()
    {
        return view('frontend.pages.companies.index', []);
    }

    public function showAdvertisePage()
    {
        return view('frontend.pages.advertise.index');
    }
}
