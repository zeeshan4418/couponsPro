<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeBannerRequest extends FormRequest
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
            'banner_name' => 'required|string',
            'banner_heading' => 'required|string',
            'banner_sub_heading' => 'required|string',
            'banner_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
