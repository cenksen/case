<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'slug', 'description', 'body'];

    public function registerMediaCollections(Media $media = null): void
    {
        $this
            ->addMediaConversion('service')
            ->format(Manipulations::FORMAT_WEBP)
            ->withResponsiveImages()
            ->nonQueued();
    }
}
