<?php

namespace App\Http\Livewire\Home;

use App\Models\Category;
use App\Models\Country;
use Livewire\Component;
use App\Models\Event;
use App\Models\Segment;
use Illuminate\Support\Facades\DB;

class FeatureEvent extends Component
{
    //required props
    public $featureEvent;
    public $segments = [];
    public $categories = [];
    public $countries = [];
    public $states = [];
    public $resultMessage = '';
    
    //queries
    public $segment;
    public $category;
    public $country;

    public function render()
    {
        return view('livewire.home.feature-event');
    }

    public function mount()
    {
        $this->featureEvent = Event::inRandomOrder()->limit(1)->first();
       
        
        $this->segments = Segment::all();
        $this->categories = Category::where('type', 'EVENT')->get();
        $this->countries = Country::all();
        $this->states = DB::table('states')->get();
    }

    protected $rules = [
        'segments' => 'nullable',
        'categories' => 'nullable',
        'countries' => 'nullable',
    ];
}
