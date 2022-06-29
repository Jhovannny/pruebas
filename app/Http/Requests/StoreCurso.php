<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name'=>'required|max:10',
'desc'=>'required|min:10',
'categoria'=>'required'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Nombre del curso'
        ];
    }

    public function messages()
    {
        return[
            'desc.required'=>'debe ingresar una discripccion del curso',
        ];  
    }
}
