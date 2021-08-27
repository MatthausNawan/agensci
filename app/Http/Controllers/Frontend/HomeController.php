<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contest;
use App\Models\Event;
use App\Models\ExternalLik;
use App\Models\Headline;
use App\Models\Job;
use App\Models\Magazine;
use App\Models\Post;
use App\Models\Promotion;
use App\Models\PublishCall;
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
                'articles' => ExternalLik::type(Category::C_ARTIGOS)->randomAble(4)->get(),
                'uni_publicas' => ExternalLik::type(Category::C_UNIVERSIDADES_PUBLICAS)->randomAble(4)->get(),
                'uni_privadas' => ExternalLik::type(Category::C_UNIVERSIDADES_PRIVADAS)->randomAble(4)->get(),
                'uni_internacionais' => ExternalLik::type(Category::C_UNIVERSIDADES_INTERNACIONAIS)->randomAble(4)->get(),
                'orgaos_educacionais' => ExternalLik::type(Category::C_ORGAOS_EDUCACIONAIS)->randomAble(4)->get(),
                'orgaos_pesquisas' => ExternalLik::type(Category::C_ORGAOS_DE_PESQUISA)->randomAble(4)->get(),
                'segments' => Segment::all(),
                'se' => Segment::whereHas('events')->get(),
                'sm' => Segment::whereHas('magazines')->get(),
                'events' => Event::whereHas('segment')->get()->groupBy('segment_id'),
                'head_magazines' => Magazine::whereHas('segment')->get()->groupBy('segment_id'),
                'site_magazines' => Magazine::whereHas('segment')->get()->groupBy('segment_id'),
                'products' => ExternalLik::type(Category::C_PRODUCTS)->randomAble(4)->get(),
                'services' => ExternalLik::type(Category::C_SERVICES)->randomAble(4)->get(),
            ]
        );
    }

    public function showTeachersPage()
    {
        return view('frontend.pages.teachers.index', [
            'laboratorios' => ExternalLik::type(Category::C_LABORATORIOS_DE_PESQUISAS)->randomAble(4)->get(),
            'ongs' => ExternalLik::type(Category::C_ONGS)->randomAble(4)->get(),
            'sociedades' => ExternalLik::type(Category::C_SOCIEDADES)->randomAble(4)->get(),
            'conselhos' => ExternalLik::type(Category::C_CONSELHOS_DE_CLASSE)->randomAble(4)->get(),
            'segments' => Segment::all(),
            'categories' => Category::all(),
            'posts' => Post::latest()->take(5)->get(),
            'foment_calls' => Promotion::latest()->take(5)->get(),
            'publish_calls' => PublishCall::latest()->take(5)->get(),
            'speakers' => Speaker::latest()->take(5)->get(),
            'products' => ExternalLik::type(Category::C_PRODUCTS)->randomAble(4)->get(),
            'services' => ExternalLik::type(Category::C_SERVICES)->randomAble(4)->get(),
        ]);
    }

    public function showStudentsPage()
    {
        return view('frontend.pages.students.index', [
            'cursos' => ExternalLik::type(Category::C_CURSOS)->randomAble(4)->get(),
            'entidades' => ExternalLik::type(Category::C_ENTIDADES_ESTUDANTIS)->randomAble(4)->get(),
            'bibliotecas' => ExternalLik::type(Category::C_BIBLIOTECAS_DIGITAIS)->randomAble(4)->get(),
            'museus' => ExternalLik::type(Category::C_MUSEUS_DIGITAIS)->randomAble(4)->get(),
            'segments' => Segment::all(),
            'categories' => Category::all(),
            // 'se' => Segment::whereHas('events')->get(),
            'posts' => Post::all(),
            'jobs' => Job::with('companyJob')->where('type', Job::TYPE_EMPREGO)->take(5)->get(),
            'jobs_st' => Job::with('companyJob')->whereIn('type', [Job::TYPE_ESTAGIO,Job::TYPE_TRAINEE])->take(5)->get(),
            'contests' => Contest::latest()->take(5)->get(),
            'students_profiles' => StudentProfile::all(),
            'products' => ExternalLik::type(Category::C_PRODUCTS)->randomAble(4)->get(),
            'services' => ExternalLik::type(Category::C_SERVICES)->randomAble(4)->get(),
        ]);
    }

    public function showCompaniesPage()
    {
        return view('frontend.pages.companies.login');
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $relatedPosts = Post::where('author_id', $post->author_id)->get();

        return view('frontend.pages.static.post-single', compact('post', 'relatedPosts'));
    }

    public function searchLink($category)
    {
        $category = Category::findOrFail($category);

        $links = ExternalLik::orderBy('name', 'ASC')
            ->where('category_id', $category->id)
            ->paginate(10);

        return view('frontend.pages.static.search-link', compact('links', 'category'));
    }

    public function contact(Request $request)
    {
        Contact::create($request->all());

        return redirect()->back()->with('contact_flash', 'Mensagem Enviada com Sucesso!');
    }
}
