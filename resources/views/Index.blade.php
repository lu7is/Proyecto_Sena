@extends('layouts.app')

@section('content')
<div class="container">

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pagina principal</title>

        <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    </head>

    <body>
        <h1  class="mb-5 text-center">BIENVENIDO AL SISTEMA MRK BRAND</h1>
        <div class="align-content-center d-flex justify-content-around m-t-5 flex-wrap">
        <a href="{{url('/empleado')}}"><button type="button" class="btn btn-primary ">Registrar Empleados</button></a><br><br>
        <a href="{{url('/administrador')}}"><button type="button" class="btn btn-primary">Registrar Administrador</button></a><br><br>
        <a href="{{url('/proveedor')}}"><button type="button" class="btn btn-primary">Registrar Proveedor</button></a><br><br>
        <a href="{{url('/cliente')}}"><button type="button" class="btn btn-primary">Registrar Cliente</button></a><br><br>
        <a href="{{url('/bodega')}}"><button type="button" class="btn btn-primary">Bodega</button></a><br><br>
        <a href="{{url('/factura')}}"><button type="button" class="btn btn-primary">Facturacion</button></a> <br><br>
        <a href="{{url('/asistencia')}}"><button type="button" class="btn btn-primary">Asistencia</button></a><br><br>
        <a href="{{url('/inventario')}}"><button type="button" class="btn btn-primary">Inventario</button></a><br>
        </div>
    </body>

    </html>
</div>
@endsection