<?php

namespace App\Http\Controllers\Painel\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventCall;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_calls = EventCall::where('creator_id', Auth::user()->id)->get();
        return view('frontend.pages.teachers.event_calls.index', compact('event_calls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::where('creator_id', Auth::user()->id)->get();
        return view('frontend.pages.teachers.event_calls.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['creator_id'] = Auth::user()->id;
        $data['enabled'] = false;

        $event = EventCall::create($data);

        return redirect()->route('teachers.event-calls.index')
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
        $eventCall = EventCall::where('creator_id', Auth::user()->id)
                ->where('id', $id)
                ->firstOrFail();
        $events = Event::where('creator_id', Auth::user()->id)->get();

        return view('frontend.pages.teachers.event_calls.edit', compact('events', 'eventCall'));
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

        $eventCall =  EventCall::findOrFail($id);

        $eventCall->update($data);

        return redirect()->route('teachers.event-calls.index')
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
