@extends('layouts.app')


@section('content')
<form action="">
  <div class="container">
    <h1>Prijavite se</h1>
    <hr>

    <label for="korime"><b>Korisničko ime</b></label>
    <input type="text" name="korime">
    <br>


    <label for="lozinka"><b>Lozinka</b></label>
    <input type="password" name="lozinka">
    <hr>


    <button type="submit">Prijavite se</button>
  </div>

  <div class="container signin">
  <p>Nemate korisnički račun?<a href="{{ route('register.show') }}">Registrirajte se</a>.</p>
  </div>
</form>
@endsection
