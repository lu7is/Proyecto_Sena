@extends('layouts.app')

@section('content')
<div class="container">
    <h1>LISTADO DE PROVEEDORES</h1>
    
<a href="{{url('proveedor/create')}}"><button class="btn btn-success">Registrar Proveedores</button></a>|**|<a href="{{url('home/')}}"><button class="btn btn-primary">Regresar a la pagina prncipals</button></a><br><br><br><br>

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
      <tr>
        <td>1</td>
        <td>luis fernando</td>
        <td>doncel</td>
        <td>315151155</td>
        <td>544126</td>
        <td>cali valle</td>
        <td>luis-doncel1@hotmail,com}</td>
        <td>lulas</td>
        <td>111544422</td>
        <td>activo</td>
        <td>administrador</td>

        <td>
            <a href="{{url('proveedor/create')}}"><button class="btn btn-warning">Editar</button></a>
        |
        <form action=""  class="d-inline" method="post">
        
            <input type="submit" onclick="return confirm('Deseas eliminar?')" class="btn btn-danger" value="Eliminar" >
        </form>
        
        </td>
        
      </tr> 
     
  
    
    </tbody>
  </table>
  
  

</div>
@endsection