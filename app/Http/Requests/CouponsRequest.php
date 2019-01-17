<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'coupon_forum_category' => 'required|string',
            'coupon_store' => 'required|string',
            'coupon_category' => 'required|string',
            'coupon_name' => 'required|string',
            'coupon_description' => 'required|string',
            'coupon_price' => 'required|string',
            'coupon_discount' => 'required|string',
            'coupon_code' => 'required|string',
            'coupon_url' => 'required|string',
            'coupon_expiry_date' => 'required|string',
            'coupon_image' => 'image|mimes:jpeg,png,jpg|max:30',
        ];
    }
}
