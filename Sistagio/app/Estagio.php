<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagio extends Model
{
  protected $table = "estagio";
  protected $fillable = [ 'id_estagio', 'observacoes', 'obtencao', 'empresa_id', 'orientador_id', 'horas', 'inicio', 'fim', 'setor', 'atividades' ];
  protected $hidden = ['updated_at', 'created_at'];  
}
?>
