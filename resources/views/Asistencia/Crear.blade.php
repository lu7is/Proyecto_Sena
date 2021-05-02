@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar y Editar Asistencia</h1><br>
    <form action="">
    <div class="form-row">
        <div class="form-group ">
          <label for="inputEmail4">Hora_Inicia</label>
          <input type="text" class="form-control" name="Nombre"  id="Nombre" placeholder="Hora_Inicia"  required>
        </div><br><br>
        <div class="form-group ">
          <label for="inputPassword4">Hora_Sale</label>
          <input type="text" name="Apellido" id="Apellidos" placeholder="Hora_Sale" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Total_Dia</label>
        <input type="number" name="Celular"  id="Celular" placeholder="Total_Dia"  required>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Nombre</label>
        <input type="number" name="Telefono" id="Telefono" placeholder="Nombre" Cliente>
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
