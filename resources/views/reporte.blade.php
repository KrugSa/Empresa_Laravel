@extends('layouts.app')
@section('content')
<H1> Sección de reportes</H1>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Monto</th>                                   
        </tr>
    </thead>
    <tbody>
            @foreach ($clientes as $cliente)
            <tr> 
            <td>{{$loop->iteration}}</td>
                <td>{{$cliente->Nombre}}</td>
                <td>{{$cliente->getsuma()}}</td>
            </tr>                       
@endforeach
    </tbody>    

@endsection