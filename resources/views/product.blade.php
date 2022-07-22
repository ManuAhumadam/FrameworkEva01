@extends('layouts.master')
<title>Product</title>

@section('content')
<h3>Productos:</h3>
<hr>
<div class="container-sm">
<form>
    <select class="form-select" aria-label="Default select example">
    <option selected>Seleccione sucursal</option>
    <option value="1">Santiago</option>
    <option value="2">Viña de Mar</option>
    <option value="3">Quilpué</option>
    </select>
    <br>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input id="exampleFormControlInput1" type="text" class="form-control" placeholder="Ingrese nombre del producto" aria-label="Recipient one">
    
    </div>
    <br>
    <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Precio</label>
    <input id="exampleFormControlInput2" type="text" class="form-control" placeholder="Ingrese el precio del productos" aria-label="Recipient two">
        
    </div>
    <br>
    <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">Cantidad</label>
    <input id="exampleFormControlInput3" type="text" class="form-control" placeholder="Ingrese cantidad de productos" aria-label="Recipient three">
        
    </div>
    <div class="mb-3">
    <button type="button" class="btn btn-success">Guardar producto</button>
    </div>
</form>

<table class="table">


    <tr>
        <td>ID Producto</td>
        <td>Nombre Celular</td>
        <td>Precio</td>
        <td>Opciones</td>
        <td></td>
    </tr>
    <tr>
        <td>#1</td>
        <td><input class="form-control me-auto" type="text" disabled=»disabled» placeholder="Samsung Galaxy S22" aria-label="Samsung"></td>
        <td><input class="form-control me-auto" type="text" disabled=»disabled» placeholder="$589.990" aria-label="precio1"></td>
        <td><button type="button" class="btn btn-warning">Editar</button></td>
        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    <tr>
        <td>#2</td>
        <td><input class="form-control me-auto" type="text" disabled=»disabled» placeholder="Iphone 13" aria-label="iphone"></td>
        <td><input class="form-control me-auto" type="text" disabled=»disabled» placeholder="$869.990" aria-label="precio2"></td>
        <td><button type="button" class="btn btn-warning">Editar</button></td>
        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    <tr>
        <td>#3</td>
        <td><input class="form-control me-auto" type="text" disabled=»disabled» placeholder="Huawei P50" aria-label="huawei"></td>
        <td><input class="form-control me-auto" type="text" disabled=»disabled» placeholder="$649.990" aria-label="precio3"></td>
        <td><button type="button" class="btn btn-warning">Editar</button></td>
        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
</table>
  
@stop