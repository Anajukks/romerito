<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'description' => 'required|min:8'
        ];
    }

    public function messages(){
        return[
            'description.required' => ':attribute é um campo obrigatório',
            'description.min' => ':attribute precisa de pelo menos 8 caracteres',
        ];
    }

}
