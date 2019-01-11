<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $fillable = [
        'coupon_forum_category',
        'coupon_store',
        'coupon_category',
        'coupon_name',
        'coupon_description',
        'coupon_price',
        'coupon_discount',
        'coupon_code',
        'coupon_url',
        'coupon_expiry_date',
        'coupon_featured',
        'coupon_exclusive',
        'coupon_verify',
        'coupon_status',
        'coupon_image',
    ];
}
