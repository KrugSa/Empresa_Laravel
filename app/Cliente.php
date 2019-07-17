<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'clientes';
    protected $fillable=['id_Cliente','Nombre'];

    public function contratos(){
        return $this->hasMany(Contrato::class,'id_Cliente','id_Cliente');//declaración de la relación
    }

    public function getsuma(){
        $suma=0;
        foreach($this->contratos as $contrato){
                $suma=$suma+$contrato->Monto;
        }
        return $suma;
    }
}
