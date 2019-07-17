@extends('layouts.app')
@section('content')
<h1> Creacion de Clientes</h1>
<form method="POST" action="{{url('/cliente')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="Name">{{'Nombre del Cliente'}}</label>
    <input type="text" name="Nombre" id="Nombre" value=""> 
    <br/>
    <br/> 
    <input type="submit" value="Agregar">
    <a href="{{url('/cliente') }}" class="btn btn-success">Ver Clientes</a>
</form>
@endsection