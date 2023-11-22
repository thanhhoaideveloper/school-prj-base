<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CoreValueRequest extends FormRequest
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
            'title',
            'description',
            'thumbnail' => [
                'image',
                'mimes:png,jpg,jpeg,gif',
                'mimetypes:image/jpeg,image/png,image/gif'
            ],
        ];
    }
}
