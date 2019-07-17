<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $table = 'contratos';
    protected $fillable=['idContrato','id_Cliente','Nombre_Contrato','Monto'];
}
