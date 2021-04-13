<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Job extends Model
{
    use SoftDeletes;

    public $table = 'jobs';

    const TYPE_SELECT = [
        '1' => 'Estágio',
        '2' => 'Vaga',
        '3' => 'Treinee'
    ];

    protected $dates = [
        'expiration_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company',
        'company_id',
        'creator_id',
        'segment_id',
        'area',
        'type',
        'formation',
        'profile',
        'address',
        'ocuppation',
        'qty_jobs',
        'salary',
        'expiration_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getExpirationDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format')) : null;
    }

    public function setExpirationDateAttribute($value)
    {
        //$this->attributes['expiration_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
        $this->attributes['expiration_date'] = $value ? Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d H:i:s') : null;
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function companies()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function segment()
    {
        return $this->belongsTo(Segment::class, 'segment_id');
    }
}
