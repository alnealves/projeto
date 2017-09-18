<?php

namespace App\Http\Controllers;

use App\Administrador;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
        private $administrador;

    public function __construct(Administrador $adm) {
        $this->administrador = $adm;        
    }
    public function index() {
        //App/produto::all();
        //$registros = Classe::all();
        return view('login_administrador');     
    }
    public function login(Request $request){
        
       $dados = $request->all();
       $login = $dados['login'];
       $senha = $dados['senha'];
       $consulta = DB::select("select * from administrador where login = '$login' and senha = '$senha'");
       $tamanho = count($consulta);
       
       if($tamanho == 1){
           //foreach ($consulta as $login2){
//               session_start();
//               $_SESSION["login"] = $login2->login;
//               $_SESSION["idLogin"] = $login2->id;
//               
              //apos o administrador logar, rota de acesso ao menu 
               return view('administrador.principal_administrador');  
           }   
       //}
       else {
           $erro="Login ou senha inválida!";
           return view('administrador',compact('erro')) ;     
           }
                
    }
    public function create(){
        //Cadastra administrador
        //Acessada quando o administrador for cadastrar pela primeira vez
    }

}
