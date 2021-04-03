<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\SpeakerStoreRequest;
use App\Models\Segment;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpeakerController extends Controller
{
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
        $segments = Segment::all();
        return view('frontend.pages.teachers.speakers.create', compact('segments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpeakerStoreRequest $request)
    {
        $data = $request->all();
        $data['creator_id'] = Auth::user()->id;

        Speaker::create($data);

        return redirect()->route('teachers.speakers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        Speaker::find($id)->update($data);

        return redirect()->route('teachers.speakers.index');
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
