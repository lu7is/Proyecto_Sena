@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar y Editar Proveedores</h1><br>
    <form action="">
    <div class="form-row">
        <div class="form-group ">
          <label for="inputEmail4">Nombre</label>
          <input type="text" class="form-control" name="Nombre"  id="Nombre" placeholder="Nombre"  required>
        </div><br><br>
        <div class="form-group ">
          <label for="inputPassword4">Apellido</label>
          <input type="text" name="Apellido" id="Apellidos" placeholder="Apellido" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Celular</label>
        <input type="number" name="Celular"  id="Celular" placeholder="Celular"  required>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Telefono</label>
        <input type="number" name="Telefono" id="Telefono" placeholder="Telefono" required>
      </div>
      <div class="form-group">
          <label for="inputAddress2">Direccion</label>
          <input type="text" name="Direccion"  id="Direccion" placeholder="Direccion" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Correo</label>
          <input type="email" name="Correo" id="Correo" placeholder="Correo"  required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Usuario</label>
          <input type="text" name="Usuario"  id="Usuario" placeholder="Usuario" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Contraseña</label>
          <input type="Password" name="Contraseña" id="Contraseña" placeholder="Contraseña"  required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Estado</label>
          <input type="text" name="Estado"  id="Estado" placeholder="Estado"  required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Rol</label>
          <input type="text" name="Rol" id="Rol" placeholder="Rol"  required>
        </div>


<input type="submit" value="Registrar">
</form>
<br><br>

<a href="{{url('proveedor/')}}">Cancelar</a>
</div>
@endsection
