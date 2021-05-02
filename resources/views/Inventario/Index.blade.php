@extends('layouts.app')

@section('content')
<div class="container">
    <h1>INVENTARIOS ACTUALES</h1>
    
<a href="{{url('inventario/create')}}"><button class="btn btn-success">Registrar Inventario</button></a>|**|<a href="{{url('home/')}}"><button class="btn btn-primary">Regresar a la pagina prncipals</button></a><br><br><br><br>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Estado</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha</th>
        <th scope="col">Acciones</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>152</td>
        <td>5</td>
        <td>ACTIVO</td>
        <td>ROCIMAR</td>
        <td>2/05/2021</td>
        
        

        <td>
            <a href="{{url('asistencia/create')}}"><button class="btn btn-warning">Editar</button></a>
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