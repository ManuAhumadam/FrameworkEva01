@extends('layouts.master')
<title>Contact</title>

@section('content')
<h3>Contacto:</h3>

Por favor, especifique el motivo de su consulta para ofrecerle el mejor servicio.
<hr>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Solicito información sobre los productos o catálogos.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Solicito la visita de un técnico CIISA.
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
  <label class="form-check-label" for="flexRadioDefault3">
    Solicito información general o corporativa.
  </label>
</div>
<hr>

<form>

<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos">
  </div>
</div>
<br>
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Email" aria-label="Email">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Número contacto" aria-label="Contacto">
  </div>
</div>
<br>
<div class="col-auto">
    <button type="submit" class="btn btn-success">Enviar formulario</button>
</div>
</form>
@stop