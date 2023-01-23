<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Korisnik;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.registration');
    }

    public function validateRegistration(RegisterRequest $request)
    {

        $data = $request->all();
        Korisnik::create([
            'korime' => $data['korime'],
            'email' => $data['email'],
            'ime' => $data['ime'],
            'prezime' => $data['prezime'],
            'lozinka' => $data['lozinka'],
            'telefonski_broj' => $data['telefonski_broj'],
        ]);

        return redirect('login')->with('successMessage', 'Uspješno ste se registrirali, prijavite se na svoj korisnički račun');
    }
}
