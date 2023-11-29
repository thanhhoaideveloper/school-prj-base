<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'thumbnail' => [
            //     'image',
            //     'mimes:png,jpg,jpeg,gif',
            //     'mimetypes:image/jpeg,image/png,image/gif'
            // ],
            'thumbnail' => 'required',
            'title' => 'required',
            'link' => 'nullable',
            'content' => 'required',
            'status' => ''
        ];
    }
}
