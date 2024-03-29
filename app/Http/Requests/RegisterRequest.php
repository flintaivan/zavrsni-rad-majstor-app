<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'korime' => 'required|max:50|unique:korisnik',
            'email' => 'required|email|max:50|unique:korisnik',
            'ime' => 'required|max:50',
            'prezime' => 'required|max:50',
            'lozinka' => 'required|min:6|max:50',
            'telefonski_broj' => 'required',
        ];
    }
}
