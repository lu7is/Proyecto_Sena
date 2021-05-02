@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ASISTENCIA DEL PERSONAL</h1>
    
<a href="{{url('asistencia/create')}}"><button class="btn btn-success">Registrar Asistencia</button></a>|**|<a href="{{url('home/')}}"><button class="btn btn-primary">Regresar a la pagina prncipals</button></a><br><br><br><br>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Hora_Inicia</th>
        <th scope="col">Hora_Sale</th>
        <th scope="col">Total_Dia</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha</th>
        <th scope="col">Acciones</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>3500</td>
        <td>tela pima</td>
        <td>5.250.000</td>
        <td>yamit grajales</td>
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