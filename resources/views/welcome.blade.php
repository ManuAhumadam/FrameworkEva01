@extends('layouts.master')
<title>Logging</title>

@section('content')
<h3>Bienvenido:</h3>
<hr>
<form>
<div class="col-auto">
    <label for="staticEmail" class="w-25 p-3">Correo electrónico:</label>
    <div class="col-sm-10">
      <input type="text" class="w-50 p-3" id="staticEmail" placeholder="mail usuario">
    </div>
  </div>
  <div class="col-auto">
    <label for="inputPassword" class="w-25 p-3"">Password</label>
    <div class="col-sm-10">
      <input type="password" class="w-50 p-3" id="inputPassword" placeholder="Contraseña">
    </div>
  </div>
  
  <ul class="nav justify-content-right">
        <li class="nav-item">
          <a class="nav-link" href="#">Olvidé mi contraseña</a>
        </li>
</ul>
<br>
  <div class="nav justify-content-center">
    <button type="submit" class="btn btn-primary mb-3">Iniciar Sesión</button>
  </div>

</form>
@stop