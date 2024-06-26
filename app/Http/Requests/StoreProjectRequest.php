<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'content' => 'required|string|',
        ];
    }

    /**
     * Get the validation message.
     *
     * @return array<string, mixed>
     */
    public function massages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Il titolo deve essere un valore testuale',
            'title.max' => 'Il titolo deve essere di {max} caratteri ',

            'content.required' => 'Il contenuto è obbligatorio',
            'content.string' => 'Il contenuto  deve essere un valore testuale',
        ];
    }
}
