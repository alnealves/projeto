<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
  protected $table = "supervisor";
  protected $fillable = [ 'id_supervisor', 'nome', 'sobrenome', 'cargo', 'email', 'telefone' ];
  protected $hidden = ['updated_at', 'created_at'];  
}
?>
