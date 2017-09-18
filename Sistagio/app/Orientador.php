<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
  protected $table = "orientador";
  protected $fillable = [ 'id_orientador', 'nome', 'sobrenome', 'telefone', 'senha', 'login', 'administrador_id', 'email' ];
  protected $hidden = ['updated_at', 'created_at'];  
}
?>
