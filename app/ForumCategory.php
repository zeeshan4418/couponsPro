<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model
{

    protected $fillable = [
        'forum_type',
        'forum_name',
        'forum_description',
        'forum_status'
    ];

}
