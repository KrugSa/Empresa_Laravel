@extends('layouts.app')
@section('content')
<H1> Sección de cliente</H1>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Id_cliente</th>
            <th>Nombre</th>                                   
        </tr>
    </thead>
    <tbody>
            @foreach ($clientes as $cliente)
            <tr> 
            <td>{{$loop->iteration}}</td>
            <td>{{$cliente->id_Cliente}}</td>
            <td>{{$cliente->Nombre}}</td>
                
            </tr>                       
            @endforeach
    </tbody>
    <a href="{{url('/cliente/create') }}" class="btn btn-success">Agregar Cliente</a>

</table>        

@endsection