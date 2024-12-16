<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicationsRequest extends FormRequest
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

            'titre' => 'required|min:5|max:200',
            'body' => 'required|min:2',
            'image' => 'image|mimes:png,jpeg,webp,jpg,svg|max:10240',
        ];
    }
    public function messages(){
        return [
            // 'titre.required'=> 'Salam',
        ];
    }
}
