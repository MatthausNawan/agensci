<?php

namespace App\Http\Livewire\Home\Lists;

use App\Models\PublishCall as ModelsPublishCall;
use Livewire\Component;

class PublishCall extends Component
{
    public $publish_calls;

    public function render()
    {
        return view('livewire.home.lists.publish-call');
    }

    public function mount()
    {
        $this->publish_calls = ModelsPublishCall::all()->take(5);
    }
}
