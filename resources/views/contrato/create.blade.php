@extends('layouts.app')
@section('content')

<form method="POST" action="{{url('/contrato/create')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<label for="Nombre">{{'Seleccione el Cliente'}}</label>
<select name="Nombre" id="idCliente">
    <option value="">
        @foreach ($cliente as $clientes)
        <option value="{{ $clientes->idCliente}}">
                {{ $clientes->Nombre}}
        </option> 
        @endforeach
    </option>
</select>  
<br/>    
@endsection