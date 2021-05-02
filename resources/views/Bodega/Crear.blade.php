@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar y Editar Bodega</h1>
    <form action="">
    <div class="form-row">
        <div class="form-group ">
          <label for="inputEmail4">Numero_remision</label>
          <input type="text" class="form-control" name="Nombre"  id="Nombre" placeholder="Numero_remision"  required>
        </div><br><br>
        <div class="form-group ">
          <label for="inputPassword4">Tipo_Mercancia</label>
          <input type="text" name="Apellido" id="Apellidos" placeholder="Tipo_Mercancia" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Cantidad</label>
        <input type="number" name="Celular"  id="Celular" placeholder="Cantidad"  required>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Cliente</label>
        <input type="number" name="Telefono" id="Telefono" placeholder="Cliente" required>
      </div>
      <div class="form-group">
          <label for="inputAddress2">Descripcion</label>
          <input type="text" name="Direccion"  id="Direccion" placeholder="Descripcion" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Fecha_ingreso</label>
          <input type="email" name="Correo" id="Correo" placeholder="Fecha_ingreso"  required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Fecha_salida</label>
          <input type="text" name="Usuario"  id="Usuario" placeholder="Fecha_salida" required>
        </div>
        


<input type="submit" value="Registrar">
</form>
<br><br>

<a href="{{url('bodega/')}}">Cancelar</a>
</div>
@endsection
