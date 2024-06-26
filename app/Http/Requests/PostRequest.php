<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:40',
            'description' => 'required|min:20|max:100',
            'image' => 'image|mimes:svg,png,jpg,jpeg',
        ];
    }

    public function message(): array
    {
        return [
            'title.required' => 's il vous plait tu doit remplir ce champ',
            'description.required' => 's il vous plait tu doit remplir ce champ',
            'image.required' => 's il vous plait tu doit remplir ce champ',
        ];
    }
}
