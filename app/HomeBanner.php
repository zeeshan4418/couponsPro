<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{

    protected $fillable = [
        'banner_name',
        'banner_heading',
        'banner_sub_heading',
        'banner_overlay',
        'banner_parallex_effect',
        'banner_image',
    ];
}
