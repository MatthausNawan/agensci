<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Company extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'companies';

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'site',
        'enabled',
        'created_at',
        'updated_at',
        'deleted_at',
        'fantasy_name',
        'cnpj',
        'address',
        'address_number',
        'postal_code',
        'district',
        'city',
        'uf',
        'phone',
        'cell_number',
        'email',
        'linkedin',
        'facebook',
        'whatsapp',
        'instagram',
        'twitter',
        'youtube',
        'logomarca',
        'requester_name',
        'requester_cpf',
        'request_date',
        'is_supporter',
        'is_partner',
        'is_sponsorship',
        'signature',
        'stamp',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function scopeRandomAble($query, $lenght)
    {
        return $query->inRandomOrder()->limit($lenght);
    }

    public function scopeAvailableToEvents($query)
    {
        return $query->orWhere('is_partner', true)
                ->orWhere('is_supporter', true)
                ->orWhere('is_sponsorship', true)
                ->get();
    }
}
