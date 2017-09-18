<?php

namespace App\Http\Controllers;

use App\Supervisor;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    private $supervisor;
        
        public function __construct(Supervisor $supervisor) {
        $this->supervisor = $supervisor;        
    }
}
