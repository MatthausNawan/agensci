<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Event;
use App\Models\Segment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function search(Request $request)
    {
        $segments = Segment::all();
        $categories = Category::where('type', 'EVENT')->get();
        $countries = Country::all();
        $states = DB::table('states')->get();
        $events = Event::getEvents($request);

        return view('frontend.pages.static.events-results', compact('events', 'segments', 'categories', 'countries', 'states', 'events'));
    }
}
