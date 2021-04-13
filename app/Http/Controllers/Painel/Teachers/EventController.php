<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\Teacher\EventStoreRequest;
use App\Models\Event;
use App\Models\Segment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('creator_id', Auth::user()->id)->get();
        return view('frontend.pages.teachers.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $segments = Segment::all();
        return view('frontend.pages.teachers.events.create', compact('segments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
        $data = $request->all();
        $data['creator_id'] = Auth::user()->id;

        $event = Event::create($data);

        if ($request->input('banner', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
        }      

        return redirect()->route('teachers.events.index')
        ->with('message', trans('Evento cadastrado com sucesso!'));
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
        $event = Event::find($id);
        $segments = Segment::all();
        return view('frontend.pages.teachers.events.edit', compact('event','segments'));
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

        $event =  Event::find($id);
        $event->update($data);

        if ($request->input('banner', false)) {
            if (!$event->banner || $request->input('banner') !== $event->banner->file_name) {
                if ($event->banner) {
                    $event->banner->delete();
                }

                $event->addMedia(storage_path('tmp/uploads/' . $request->input('banner')))->toMediaCollection('banner');
            }
        } elseif ($event->banner) {
            $event->banner->delete();
        }


        return redirect()->route('teachers.events.index')
        ->with('message', trans('Evento atualizado com sucesso!'));
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
