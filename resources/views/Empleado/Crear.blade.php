


<form action="{{url('/empleado')}}" method="post">
    @csrf
    @include('Empleado.Form',['modo'=>'Crear']);

</form>