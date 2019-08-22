<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioEmpresa extends Model
{
    protected $table = 'usuario_empresa';

    public function empresas(){
        return $this->hasMany('App/Empresa');
    }

    public function usuarios(){
        return $this->hasMany('App/Usuario');
    }
}
