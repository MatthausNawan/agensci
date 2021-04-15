<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\Teacher\PostStoreRequest;
use App\Models\Post;
use App\Models\Segment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Spatie\MediaLibrary\Models\Media;

class PostController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('author_id', Auth::user()->id)->get();
        return view('frontend.pages.teachers.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $segments = Segment::all();
        return view('frontend.pages.teachers.posts.create', compact('segments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->all();
        $data['author_id'] = Auth::user()->id;
        $data['status'] = 5; //Em Análise

        $post = Post::create($data);

        if ($request->input('banner', false)) {
            $post->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $post->id]);
        }


        return redirect()->route('teachers.posts.index')
        ->with('message', trans('Noticia cadastrada com sucesso!'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('frontend.pages.teachers.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['author_id'] = Auth::user()->id;

        $post =  Post::find($id);
        $post->update($data);

        if ($request->input('banner', false)) {
            if (!$post->banner || $request->input('banner') !== $post->banner->file_name) {
                if ($post->banner) {
                    $post->banner->delete();
                }

                $post->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
            }
        } elseif ($post->banner) {
            $post->banner->delete();
        }


        return redirect()->route('teachers.posts.index')
        ->with('message', trans('Noticia atualiza com sucesso!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeCKEditorImages(Request $request)
    {
        $model         = new Post();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
