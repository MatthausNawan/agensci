<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\Teacher\SpeakerStoreRequest;
use App\Models\Segment;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpeakerController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speaker::where('creator_id', Auth::user()->id)->get();
        return view('frontend.pages.teachers.speakers.index', compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speaker = Speaker::where('creator_id', Auth::user()->id)->first();

        if (!$speaker) {
            return view('frontend.pages.teachers.speakers.create');
        } else {
            return view('frontend.pages.teachers.speakers.edit', compact('speaker'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['creator_id'] = Auth::user()->id;

        $speaker = Speaker::create($data);

        if ($request->input('photo', false)) {
            $speaker->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return redirect()->route('teachers.speakers.create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speaker = Speaker::find($id);

        return view('frontend.pages.teachers.speakers.edit', compact('speaker'));
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
        $data['creator_id'] = Auth::user()->id;

        $speaker = Speaker::find($id);

        $speaker->update($data);

        if ($request->input('photo', false)) {
            if (!$speaker->photo || $request->input('photo') !== $speaker->photo->file_name) {
                if ($speaker->photo) {
                    $speaker->photo->delete();
                }

                $speaker->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($speaker->photo) {
            $speaker->photo->delete();
        }

        return redirect()->route('teachers.speakers.create');
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
}
