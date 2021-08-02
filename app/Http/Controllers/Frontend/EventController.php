<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function search(Request $request)
    {
        $events = Event::getEvents($request);

        return view('frontend.pages.static.events-results', compact('events'));
    }
}
