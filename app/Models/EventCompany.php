<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCompany extends Model
{
    protected $fillable = [
        'event_id',
        'company_id',
        'event_title',
        'company_name',
        'type'
    ];

    const TYPE_SUPPORT = 'support';
    const TYPE_PARTER = 'partner';
    const TYPE_SPONSORSHIP = 'sponsorship';
    const TYPE_COLLABORATOR = 'collaborator';

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
