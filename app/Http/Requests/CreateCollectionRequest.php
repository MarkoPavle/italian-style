<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCollectionRequest extends FormRequest
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
            'desc' => 'min:6',
        ];
    }

    /*public function messages()
    {
        return [
            'title.required' => 'Naziv je obavezan',
            'desc.min' => 'Opis mora imati minimum 6 karatktera',
        ];
    }*/
}
