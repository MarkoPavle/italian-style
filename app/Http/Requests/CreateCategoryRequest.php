<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'title' => 'required',
            'slug' => 'required',
            'desc' => 'min:6',
        ];
    }

    /*public function messages()
    {
        return [
            'title.required' => 'Naziv je obavezan',
            'title.slug' => 'Slug je obavezan',
            'desc.min' => 'Opis mora imati minimum 6 karatktera',
        ];
    }*/
}