<?php

namespace App\Http\Livewire\Home;

use App\Models\NewsLetter as NewsletterModel;
use App\Notifications\NewsletterUserSubscribed;
use Livewire\Component;

class NewsLetter extends Component
{
    public $name;
    public $email;
    public $whatsapp;

    public function render()
    {
        return view('livewire.home.news-letter');
    }

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'whatsapp' => 'required',
    ];

    public function storeNewsLetter()
    {
        $this->validate();

        $newsletter = NewsletterModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp
        ]);

        $newsletter->notify(new NewsletterUserSubscribed($newsletter));
    }
}
