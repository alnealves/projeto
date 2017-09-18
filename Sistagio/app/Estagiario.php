<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
  protected $table = "estagiario";
  protected $fillable = [ 'id_estagiario', 'nome', 'sobrenome', 'matricula', 'bairro', 'orientador_id', 'supervisor_id', 'logradouro', 'cidade', 'numero', 'estado', 'cep', 'rg', 'data_nasc', 'email', 'telefone', 'celular', 'curso', 'semestre', 'login', 'senha' ];
  protected $hidden = ['updated_at', 'created_at'];  
}
?>
