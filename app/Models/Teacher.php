<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Teacher extends Model implements HasMedia
{
    use  HasMediaTrait;

    public $table = 'teachers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $appends = [
        'logo',
    ];

    protected $fillable = [
        'name',
        'genre',
        'birth_date',
        'formation',
        'speciality',
        'occupation_lattes',
        'resume_link',
        'profession',
        'class_council',
        'institution_works',
        'office',
        'enrollment_number',
        'cpf',
        'email',
        'cell_number',
        'whatsapp',
        'postal_code',
        'district',
        'country',
        'uf',
        'city',
        'linkedin',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'user_id',
        'deleted_at'
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
}
