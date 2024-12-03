<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $table = 'configuration';

    protected $fillable = [
        'path',
        'path_logo',
        'website_name',
        'title',
        'meta_keywords',
        'meta_descriptions',
        'footer',
        'path_building',
        'path_building_2',
        'title_building',
        'overview_building',
        'description',
        'areas_building',
        'parkings_building',
        'units_buildings',
        'bedrooms_building',
        'features_building',
        'youtube_superiority',
    ];
}
