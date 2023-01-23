@extends('layouts.app')

@section('content')
<form action="">
  <div class="container">
    <h1>Registrirajte se</h1>
    <p>Popunite formu kako biste izradili korisnički račun.</p>
    <hr>

    <label for="ime"><b>Ime</b></label>
    <input type="text" name="ime">
    <br>

    <label for="prezime"><b>Prezime</b></label>
    <input type="text" name="prezime">
    <br>

    <label for="korime"><b>Korisničko ime</b></label>
    <input type="text" name="korime">
    <br>

    <label for="email"><b>Email</b></label>
    <input type="text" name="email">
    <br>

    <label for="lozinka"><b>Lozinka</b></label>
    <input type="password" name="lozinka">
    <br>

    <label for="telefonski_broj"><b>Telefonski broj</b></label>
    <input type="text" name="telefonski_broj">
    <hr>


    <button type="submit">Registriraj se</button>
  </div>

  <div class="container signin">
  <p>Već imate korisnički račun?<a href="{{ route('login') }}">Prijavite se</a>.</p>
  </div>
</form>
@endsection
