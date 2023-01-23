<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.registration');
    }

    public function validateRegistration(Request $request)
    {
        $request->validate([
            'korime' => 'required|max:50|unique:korisnik',
            'email' => 'required|email|max:50|unique:korisnik',
            'ime' => 'required|max:50',
            'prezime' => 'required|max:50',
            'lozinka' => 'required|min:6|max:50',
            'telefonski_broj' => 'required',
        ]);

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
