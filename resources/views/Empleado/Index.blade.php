
@extends('layouts.app')

@section('content')
<div class="container">

<div class="d-flex justify-content-around d-inline-block mb-5">
  <a href="{{url('home/')}}"> <button class="btn btn-primary"><i class="fas fa-chevron-left pr-2"></i> Inicio</button></a>
  <a href="{{url('empleado/create')}}"><button class="btn btn-success"><i class="fas fa-user-plus pr-2"></i>Registrar Empleados</button></a>
</div>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Celular</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Correo</th>
        <th scope="col">Usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Estado</th>
        <th scope="col">Rol</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($empleados as $empleado)
    @if($empleado->Estado == "Activo")
    <tr class="table-success">
    @else
    <tr class="table-danger">
    @endif
      <td>{{$empleado->id}}</td>
      <td>{{$empleado->Nombre}}</td>
      <td>{{$empleado->Apellido}}</td>
      <td>{{$empleado->Celular}}</td>
      <td>{{$empleado->Telefono}}</td>
      <td>{{$empleado->Direccion}}</td>
      <td>{{$empleado->Correo}}</td>
      <td>{{$empleado->Usuario}}</td>
      <td>{{$empleado->Contraseña}}</td>
      <td>{{$empleado->Estado}}</td>
      <td>{{$empleado->Rol}}</td>
      <td>
      <a href="{{url('/empleado/'.$empleado->id.'/edit')}}"><button class="btn btn-warning"><i class="fas fa-user-edit"></i></button></a>
      <form action="{{url('/empleado/'.$empleado->id)}}"  class="d-inline" method="post">
      @csrf
      {{method_field('DELETE')}}
      <a onclick="return confirm('Deseas eliminar?')" href="{{url('/empleado/'.$empleado->id.'/edit')}}"><button class="btn btn-danger"><i class="fas fa-user-minus"></i></button></a>
      </form>
      </td>
    </tr>    
    @endforeach
    </tbody>
  </table>
  
  

</div>
@endsection