<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Slider extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'primary_button_text',
        'primary_button_url',
    ];

    public function registerMediaCollections(Media $media = null): void
    {
        $this
            ->addMediaConversion('slider')
            ->format(Manipulations::FORMAT_WEBP)
            ->withResponsiveImages()
            ->nonQueued();
    }
}
