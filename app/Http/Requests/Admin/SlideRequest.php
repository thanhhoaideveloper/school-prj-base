<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
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
            'thumbnail' => [
                'required',
                'image',
                'mimes:png,jpg,jpeg',
                'mimetypes:image/jpeg,image/png'
            ],
            'title' => 'required',
            'link' => 'required',
            'content' => ''
        ];
    }
}
