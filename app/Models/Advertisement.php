<?php

namespace App\Models;

use App\Services\AdversitmentService;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    const STATUS_CREATED = 'CREATED';
    const STATUS_CONFIRMED = 'CONFIRMED';
    const STATUS_PUBLISHED = 'PUBLISHED';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_REJECTED = 'REJECTED';


    protected $fillable = [
        'social_name',
        'fantasy_name',
        'social_id',
        'phone',
        'mobile',
        'zipcode',
        'state',
        'city',
        'contact_name',
        'contact_phone',
        'contact_mobile',
        'contact_email',
        'contact_social_id',
        'reach_states',
        'reach_cities',
        'reach_categories',
        'reach_segments',
        'reach_genres',
        'advertising_place_id',
        'total_price',
        'status',
        'reject_reason',
        'media_type',
        'media_embed',
        'media_link',
        'media_file',
        'start_at',
        'end_at',
        'enabled'
    ];

    protected $casts = [
        'reach_states' => 'array',
        'reach_categories' => 'array',
        'reach_segments' => 'array',
        'reach_genres' => 'array',
        'reach_citites' => 'array',
        'enabled' => 'boolean'
    ];

    protected $dates = [
        'start_at',
        'end_at'
    ];

    public function getEstimatedPrice()
    {
        $local = LocalAdvertisement::find($this->advertising_place_id);
        $adversitmentService = new AdversitmentService($local);
        
        $total = $local->price;

        if (count($this->reach_states) > 0) {
            $totalStates = intval(count($this->reach_states));
            $total += $adversitmentService->getValuePerStates($totalStates);
        }

        if (count($this->reach_categories) > 0) {
            $totalCategories = intval(count($this->reach_categories));
            $total += $adversitmentService->getValuePerCategories($totalCategories);
        }

        if (count($this->reach_segments) > 0) {
            $totalSegments = intval(count($this->reach_segments));
            $total += $adversitmentService->getValuePerArea($totalSegments);
        }

        if (count($this->reach_genres) > 0) {
            $totalGenres = intval(count($this->reach_genres));
            $total += $adversitmentService->getValueGenres($totalGenres);
        }

        $totalPerDays = $adversitmentService->getValuePerDays($this->start_at, $this->end_at);
        $total += $totalPerDays;

        return $total;
    }
}
