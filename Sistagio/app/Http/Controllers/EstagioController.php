<?php

namespace App\Http\Controllers;

use App\Estagio;
use Illuminate\Http\Request;

class EstagioController extends Controller
{
    private $estagio;
        
        public function __construct(Estagio $estagio) {
        $this->estagio = $estagio;        
    }
}
