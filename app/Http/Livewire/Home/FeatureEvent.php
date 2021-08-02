<?php

namespace App\Http\Livewire\Home;

use App\Models\Category;
use App\Models\Country;
use Livewire\Component;
use App\Models\Event;
use App\Models\Segment;

class FeatureEvent extends Component
{
    //required props
    public $featureEvent;
    public $segments = [];
    public $categories = [];
    public $countries = [];
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
        $this->featureEvent = Event::whereNotNull(['category_id','country_id','segment_id'])
            ->inRandomOrder()->limit(1)->first();
        
        $this->segment = $this->featureEvent->segment_id ?? null;
        $this->category = $this->featureEvent->category_id ?? null;
        $this->country = $this->featureEvent->country_id ?? null;

        $this->segment = $this->featureEvent->segment_id;

        $this->segments = Segment::all();
        $this->categories = Category::where('type', 'EVENT')->get();
        $this->countries = Country::all();
    }

    protected $rules = [
        'segments' => 'nullable',
        'categories' => 'nullable',
        'countries' => 'nullable',
    ];
    
    public function searchEvent()
    {
        $newEvent = Event::where('segment_id', $this->segment)
            ->where('category_id', $this->category)
            ->where('country_id', $this->country)
            ->first();

        $this->resultMessage = !$newEvent ? 'Nenhum evento foi econtrado' : '';
        $this->featureEvent = $newEvent ? $newEvent : $this->featureEvent;
    }
}
