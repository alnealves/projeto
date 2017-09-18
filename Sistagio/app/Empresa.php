<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = "empresa";
  protected $fillable = [ 'id_empresa', 'nome', 'email', 'CNPJ', 'telefone', 'site', 'cep', 'bairro', 'estado', 'numero', 'logradouro', 'area', 'cidade' ];
  protected $hidden = ['updated_at', 'created_at'];  
}
?>
