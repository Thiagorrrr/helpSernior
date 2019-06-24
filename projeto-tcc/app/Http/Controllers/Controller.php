<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function userDescription($name, $id) 
    {
        $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();
        
        
        $dado_alt = $id;
    
        $qry = \DB::table('users')->where('id', '=', $dado_alt)->get();
  
        $title = "helpSeniors - usuario";
        return view('user.dashboard', ['data' => $qry[0],  'title' => $title,'links'=> $links] );

    }
    public function buscar() 
    {
        $mensagem ="";
        $q = Input::get ( 'q' );

        $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();
        if ($q == null) {
            $data = \DB::table('users')->whereNotNull('funcao')->get();
        } else {
            $data = \DB::table('users')->where('name', 'ILIKE' , $q)->whereNotNull('funcao')->get();
        }

        if(count($data) <= 0) {
            $mensagem = "Não foi encontrado por favor busque novamente";
        }
    
    
        $title = "helpSeniors - Buscar";
        return view('templates.pages.buscar', ['data' => $data,  'title' => $title,'links'=> $links, 'mensagem'=>  $mensagem] ) ;

    }
    public function buscarCasa() 
    {
        $mensagem ="";
        $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();

        $q = Input::get ( 'q' );

        if ($q == null) {
            $data = \DB::table('users')->where('funcao', '=', 'Casa de Repouso')->get();
        } else {
            $data = \DB::table('users')->where('name', 'ILIKE' , $q)->where('funcao', '=', 'Casa de Repouso')->get();
        }
        if(count($data) <= 0) {
            $mensagem = "Não foi encontrado por favor busque novamente";
        }
       
        $title = "helpSeniors - Buscar - casa de repouso";
        return view('templates.pages.buscar', ['data' => $data,  'title' => $title,'links'=> $links, 'mensagem'=>  $mensagem] ) ;

    }
    public function buscarCuidador() 
    {
        $mensagem ="";
        $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();
    
        $title = "helpSeniors - Buscar - cuidador";

        $q = Input::get ( 'q' );

        if ($q == null) {
            $data = \DB::table('users')->where('funcao', '=', 'Cuidador')->get();
        } else {
            $data = \DB::table('users')->where('name', 'ILIKE' , $q)->where('funcao', '=', 'Cuidador')->get();
        }
        if(count($data) <= 0) {
            $mensagem = "Não foi encontrado por favor busque novamente";
        }
        
        return view('templates.pages.buscar', ['data' => $data,  'title' => $title,'links'=> $links] ) ;

    }
 
    public function homepage() 
    {
        $links =\DB::table('table_menu')->orderBy('order', 'asc')->get();
        $title = "helpSeniors - Home";
        
        return view('templates.master',
        [
            'title' => $title,
            'links' => $links,
        ]);
    }
    

    public function cadastrar() 
    {
        $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();
        $title = "helpSeniors - cadastro - escolha o tipo de usuario";

        return view('user.cadastro',[
            'title' => $title,
            'links' => $links,
        ]);
    }
    public function cadastrarParceiro() 
    {
        $links =\DB::table('table_menu')->orderBy('order', 'asc')->get();
        $title = "helpSeniors - cadastro - Parceiro";

        return view('user.cadastroParceiro',
        [
            'title' => $title,
            'links' => $links,
        ]);
    }
    public function cadastrarCliente() 
    {
        $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();
        $title = "helpSeniors - cadastro - Cliente";

        return view('user.cadastroCliente',
        [
            'title' => $title,
            'links' => $links,
        ]);
    }
    // metodo login view
    public function fazerLogin() 
    {
        $links =\DB::table('table_menu')->orderBy('order', 'asc')->get();
        $title = "helpSeniors - login";
        //$users = \DB::table('table_menu')->get();
        
        return view('user.login', 
        [
            'title' => $title,
            'links' => $links,
            'login' => 'header__login-box--none',
        ]);
    }
}
