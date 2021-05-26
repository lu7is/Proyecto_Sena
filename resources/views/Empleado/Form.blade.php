@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center">{{$modo}} Empleado</h1>
  
  <div class="">
    <div class="form-row flex justify-content-center m-auto">
      <div class="form-group w-50 mr-2">
        <label for="inputEmail4">Nombre</label>
        <input type="text" class="form-control" name="Nombre"  id="Nombre" placeholder="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" required>
      </div>
      <div class="form-group w-50 mr-2">
        <label for="inputPassword4">Apellido</label>
        <input type="text" name="Apellido" id="Apellidos" placeholder="Apellido" class="form-control" value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}" required>
      </div>
    <div class="form-group w-50 mr-2">
      <label for="inputAddress">Celular</label>
      <input type="number" name="Celular" id="Celular" placeholder="Celular" class="form-control" value="{{isset($empleado->Celular)?$empleado->Celular:''}}" required>
    </div>
    <div class="form-group w-50 mr-2">
      <label for="inputAddress2">Telefono</label>
      <input type="number" name="Telefono" id="Telefono" placeholder="Telefono" class="form-control" value="{{isset($empleado->Telefono)?$empleado->Telefono:''}}" required>
    </div>
    <div class="form-group w-50 mr-2">
        <label for="inputAddress2">Direccion</label>
        <input type="text" name="Direccion"  id="Direccion" placeholder="Direccion" class="form-control" value="{{isset($empleado->Direccion)?$empleado->Direccion:''}}" required>
      </div>
      <div class="form-group w-50 mr-2">
        <label for="inputAddress2">Correo</label>
        <input type="email" name="Correo" id="Correo" placeholder="Correo" class="form-control" value="{{isset($empleado->Correo)?$empleado->Correo:''}}" required>
      </div>
      <div class="form-group w-50 mr-2">
        <label for="inputAddress2">Usuario</label>
        <input type="text" name="Usuario"  id="Usuario" placeholder="Usuario" class="form-control" value="{{isset($empleado->Usuario)?$empleado->Usuario:''}}" required>
      </div>
      <div class="form-group w-50 mr-2">
        <label for="inputAddress2">Contraseña</label>
        <input type="Password" name="Contraseña" id="Contraseña" placeholder="Contraseña" class="form-control" value="{{isset($empleado->Contraseña)?$empleado->Contraseña:''}}" required>
      </div>
      <div class="form-group w-50 mr-2">
        <label for="inputAddress2">Estado</label>
        <select value="{{isset($empleado->Estado)?$empleado->Estado:''}}" name="Estado" id="Estado" required class="custom-select">
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
        </select>
      </div>
      <div class="form-group w-50">
        <label for="inputAddress2">Rol</label>
        <input type="text" name="Rol" class="form-control" id="Rol" placeholder="Rol" value="{{isset($empleado->Rol)?$empleado->Rol:''}}" required>
      </div>

    </div>
  </div>

  <div class="d-flex justify-content-center">
  <input type="submit" class="btn btn-success mr-5" value="Registrar">
  <a href="{{url('empleado/')}}" class="btn btn-danger">Cancelar</a>
  </div>

<br><br>

</div>
@endsection


      







      
    