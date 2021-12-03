<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateRequest extends FormRequest
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
            'title'=>'required|min:3|max:160',
            'image'=>'image|required',
            'content'=>'nullable|min:2|max:1000',
        ];
    }
    
    public function messages()
    {
        return [
            'title.required'=>'O título deve conter no minimo 3 caracteres',
            'content.required'=>'Informe no minimo 2 caracteres para o seu post',
        ];
    }
}
