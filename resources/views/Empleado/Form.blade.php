@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{$modo}} Empleado</h1>
    <div class="form-row">
        <div class="form-group ">
          <label for="inputEmail4">Nombre</label>
          <input type="text" class="form-control" name="Nombre"  id="Nombre" placeholder="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" required>
        </div><br><br>
        <div class="form-group ">
          <label for="inputPassword4">Apellido</label>
          <input type="text" name="Apellido" id="Apellidos" placeholder="Apellido" value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Celular</label>
        <input type="number" name="Celular"  id="Celular" placeholder="Celular" value="{{isset($empleado->Celular)?$empleado->Celular:''}}" required>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Telefono</label>
        <input type="number" name="Telefono" id="Telefono" placeholder="Telefono" value="{{isset($empleado->Telefono)?$empleado->Telefono:''}}" required>
      </div>
      <div class="form-group">
          <label for="inputAddress2">Direccion</label>
          <input type="text" name="Direccion"  id="Direccion" placeholder="Direccion" value="{{isset($empleado->Direccion)?$empleado->Direccion:''}}" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Correo</label>
          <input type="email" name="Correo" id="Correo" placeholder="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Usuario</label>
          <input type="text" name="Usuario"  id="Usuario" placeholder="Usuario" value="{{isset($empleado->Usuario)?$empleado->Usuario:''}}" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Contraseña</label>
          <input type="Password" name="Contraseña" id="Contraseña" placeholder="Contraseña" value="{{isset($empleado->Contraseña)?$empleado->Contraseña:''}}" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Estado</label>
          <input type="text" name="Estado"  id="Estado" placeholder="Estado" value="{{isset($empleado->Estado)?$empleado->Estado:''}}" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Rol</label>
          <input type="text" name="Rol" id="Rol" placeholder="Rol" value="{{isset($empleado->Rol)?$empleado->Rol:''}}" required>
        </div>


<input type="submit" value="Registrar">

<br><br>

<a href="{{url('empleado/')}}">Cancelar</a>
</div>
@endsection


      







      
    