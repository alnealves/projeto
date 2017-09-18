<?php

namespace App\Http\Controllers;

use App\Estagiario;
use Illuminate\Http\Request;

class EstagiarioController extends Controller
{
    private $estagiario;
        
        public function __construct(Estagiario $est) {
        $this->estagiario = $est;        
    }
}
