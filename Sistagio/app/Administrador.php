<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
  protected $table = "administrador";
  protected $fillable = [ 'id_administrador', 'nome', 'senha', 'sobrenome', 'login' ];
  protected $hidden = ['updated_at', 'created_at'];  
}
?>
