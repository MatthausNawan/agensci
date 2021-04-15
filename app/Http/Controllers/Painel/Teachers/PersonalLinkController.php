<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePermissionRequest;
use App\Models\PersonalLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalLinkController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $personalLinks = PersonalLink::where('user_id', Auth::user()->id)->get();
        return view('frontend.pages.teachers.personal-links.index', compact('personalLinks'));
    }

    public function create()
    {
        return view('frontend.pages.teachers.personal-links.create');
    }

    public function store(StorePermissionRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $personalLink = PersonalLink::create($data);

        if ($request->input('photo', false)) {
            $personalLink->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return redirect()->route('teachers.personal-links.index')
            ->with('message', trans('Link cadastrado com sucesso!'));
    }

    public function edit($id)
    {
        $personalLink = PersonalLink::find($id);

        return view('frontend.pages.teachers.personal-links.edit', compact('personalLink'));
    }

    public function update(Request $request, $id)
    {
        $personalLink = PersonalLink::find($id);

        $personalLink->update($request->all());

        if ($request->input('photo', false)) {
            if (!$personalLink->photo || $request->input('photo') !== $personalLink->photo->file_name) {
                if ($personalLink->photo) {
                    $personalLink->photo->delete();
                }

                $personalLink->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($personalLink->photo) {
            $personalLink->photo->delete();
        }

        return redirect()->route('teachers.personal-links.index')
        ->with('message', trans('Link atualizado com sucesso!'));
    }

    public function destroy($id)
    {
        $personalLink = PersonalLink::find($id);
        $personalLink->delete();

        return redirect()->route('teachers.personal-links.index')
        ->with('message', trans('Link removido com sucesso!'));
    }
}
