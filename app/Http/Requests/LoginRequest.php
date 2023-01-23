<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'korime' => 'required',
            'lozinka' => 'required',
        ];
    }

    public function getCredentials()
    {
        $korime = $this->get('korime');

        if($this->isEmail($korime)){
            return [
                'email' => $korime,
                'password' => $this->get('lozinka'),
            ];
        }
        return $this->only('korime', 'lozinka');
    }

    private function isEmail($param)
    {
        return ! Validator::make(
            ['korime' => $param],
            ['korime' => 'email'],
        )->fails();
    }
}
