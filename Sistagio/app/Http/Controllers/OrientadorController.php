<?php

namespace App\Http\Controllers;

use App\Administrador;
use App\Estagiario;
use App\Orientador;
use Illuminate\Http\Request;

class OrientadorController extends Controller
{
    private $orientador;
        
        public function __construct(Orientador $orientador) {
        $this->orientador = $orientador;        
    }
   
    public function index(){
        $alunos = App/Estagiario::all();
        
        foreach($alunos as $registros){
            echo $registros->nome;
            echo $registros->sobrenome;
            echo $registros->matricula;
            echo $registros->curso;
            echo $registros->semestre;
        }
    }
}
