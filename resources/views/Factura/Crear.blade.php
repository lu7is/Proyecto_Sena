@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar y Editar Facturas</h1><br>
    <form action="">
    <div class="form-row">
        <div class="form-group ">
          <label for="inputEmail4">Cantidad</label>
          <input type="text" class="form-control" name="Nombre"  id="Nombre" placeholder="Cantidad"  required>
        </div><br><br>
        <div class="form-group ">
          <label for="inputPassword4">Descripcion</label>
          <input type="text" name="Apellido" id="Apellidos" placeholder="Descripcion" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Total</label>
        <input type="number" name="Celular"  id="Celular" placeholder="Total"  required>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Cliente</label>
        <input type="number" name="Telefono" id="Telefono" placeholder="Telefono" Cliente>
      </div>
      <div class="form-group">
          <label for="inputAddress2">Fecha</label>
          <input type="text" name="Direccion"  id="Direccion" placeholder="Fecha" required>
        </div>
        


<input type="submit" value="Registrar">
</form>
<br><br>

<a href="{{url('factura/')}}">Cancelar</a>
</div>
@endsection
