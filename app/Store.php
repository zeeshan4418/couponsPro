<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'store_name',
        'store_image',
        'store_link',
        'store_featured',
        'store_status'
    ];
}
