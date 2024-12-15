<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            // 'name' => 'required|unique:profiles',
            // 'email' => 'required|email|unique:profiles',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:50|confirmed',
            'bio' => 'required',
            'image' => 'required|image|mimes:png,jpeg,webp,jpg,svg|max:10240',
        ];
    }
}
// |dimensions:width=2300,height=2300