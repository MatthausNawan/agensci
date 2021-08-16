<?php

namespace App\Models;

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

    public function getStartAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartAtAttribute($value)
    {
        $this->attributes['start_at'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndAtAttribute($value)
    {
        $this->attributes['end_at'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
