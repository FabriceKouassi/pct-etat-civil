<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCitoyenRequest extends FormRequest
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
            'nom' => 'required',
            'prenoms' => 'require',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'img' => 'required|mimes:png,jpg|size:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => "Le nom est obligatoire",
            'prenoms.required' => "Le prenoms est obligatoire",
            'date_naissance.required' => "La description obligatoire",
            'img.required' => "L'image est obligatoire",
            'img.mimes' => "L'image doit etre de format PNG ou JPG",
            'img.size' => "L'image ne doit pas exédé 2048 Mo",
        ];
    }
}
