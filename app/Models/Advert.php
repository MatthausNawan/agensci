<?php

namespace App\Models;

use App\Services\AdversitmentService;
use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advert extends Model
{
    // use SoftDeletes;

    public const MEDIA_TYPE_SELECT = [
        'IMAGE' => 'Imagem',
        'VIDEO' => 'Video',
    ];

    public const STATUS_SELECT = [
        'CREATED'   => 'Criado',
        'CONFIRMED' => 'Confirmado',
        'PUBLISHED' => 'Publicado',
        'FINISHED'  => 'Finalizado',
        'REJECTED'  => 'REJEITADO',
    ];

    const STATUS_CREATED = 'CREATED';
    const STATUS_CONFIRMED = 'CONFIRMED';
    const STATUS_PUBLISHED = 'PUBLISHED';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_REJECTED = 'REJECTED';

    public $table = 'advertisements';

    protected $dates = [
        'start_at',
        'end_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'social_name',
        'fantasy_name',
        'social_number',
        // 'phone',
        // 'mobile',
        // 'zipcode',
        'state',
        'contact_name',
        'contact_phone',
        'contact_mobile',
        'contact_email',
        'contact_social_number',
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
        'media_link',
        'media_file',
        'start_at',
        'end_at',
        'enabled',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function advertising_place()
    {
        return $this->belongsTo(LocalAdvertisement::class, 'advertising_place_id');
    }

    protected $casts = [
        'reach_states'=> 'json',
        'reach_cities'=> 'json',
        'reach_categories'=> 'json',
        'reach_segments'=> 'json',
        'reach_genres'=> 'json'
    ];

    // public function getStartAtAttribute($value)
    // {
    //     return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    // }

    // public function setStartAtAttribute($value)
    // {
    //     $this->attributes['start_at'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    // }

    // public function getEndAtAttribute($value)
    // {
    //     return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    // }

    // public function setEndAtAttribute($value)
    // {
    //     $this->attributes['end_at'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    // }

    // protected function serializeDate(DateTimeInterface $date)
    // {
    //     return $date->format('Y-m-d H:i:s');
    // }
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
