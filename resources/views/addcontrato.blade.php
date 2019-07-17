@extends('layouts.app')
@section('content')
<form method="POST" action="{{url('/addcontrato')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<label for="Nombre">{{'Seleccione el Cliente'}}</label>
<select name="id_Cliente" id="id_Cliente">
    <option value="">
        @foreach ($clientes as $cliente)
        <option value="{{ $cliente->id_Cliente}}">
                {{ $cliente->Nombre}}
        </option> 
        @endforeach
    </option>
</select> 
<br/>
<label for="Nombre_Contrato">{{'Nombre del Contrato'}}</label>
<input type="text" name="Nombre_Contrato" id="Nombre_Contrato" value="">
<br/>
<label for="Monto">{{'Ingrese el Monto'}}</label>
<input type="number" name="Monto" id="Monto" value="">
<br/>
<br/> 
<input type="submit" value="Agregar">
<br/>
<br/>
<a href="{{url('/contrato') }}" class="btn btn-success">Contratos</a>  
</form>
@endsection