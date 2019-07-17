@extends('layouts.app')
@section('content')
<H1> Sección de contratos</H1>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre Contrato</th>
            <th>Id Cliente</th>
            <th>Monto</th>                                   
        </tr>
    </thead>
    <tbody>
            @foreach ($contratos as $contrato)
            <tr> 
                <td>{{$loop->iteration}}</td>
                <td>{{$contrato->Nombre_Contrato}}</td>
                <td>{{$contrato->id_Cliente}}</td>
                <td>{{$contrato->Monto}}</td>
            </tr>                       
@endforeach
    </tbody>
    <a href="{{url('/reporte') }}" class="btn btn-success">Ver Reporte de Montos</a>
 </table>
        
  

@endsection