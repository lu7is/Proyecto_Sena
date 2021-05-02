@extends('layouts.app')

@section('content')
<div class="container">
    <h1>LISTADO DE MERCANCIA EN BODEGA</h1>
    
<a href="{{url('bodega/create')}}"><button class="btn btn-success">Registrar Nueva Mercancia</button></a>|**|<a href="{{url('home/')}}"><button class="btn btn-primary">Regresar a la pagina prncipals</button></a><br><br><br><br>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Numero_remision</th>
        <th scope="col">Tipo_Mercancia</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Cliente</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Fecha_ingreso</th>
        <th scope="col">Fecha_salida</th>
        <th scope="col">Acciones</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>05551</td>
        <td>tela pima</td>
        <td>3500</td>
        <td>yamit grajales</td>
        <td>ninguna</td>
        <td>2/05/2021</td>
        <td>9/05/2021</td>
        

        <td>
            <a href="{{url('bodega/create')}}"><button class="btn btn-warning">Editar</button></a>
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