<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
        private $empresa;
        
        public function __construct(Empresa $emp) {
        $this->empresa = $emp;        
    }
}
