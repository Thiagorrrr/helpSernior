<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function teste($name) 
    {
        $links = \DB::table('table_menu')->orderBy('ordem', 'asc')->get();
        $title = "cadastro - escolha o tipo de usuario";
        $dado_alt = str_replace("'","",$name);
    
        // $qry = 'SELECT * FROM tableFoo WHERE LastName LIKE "'.$lastName.'" AND GivenNames LIKE "'.$firstName.'%" ' ;

        $qry = 'SELECT * FROM table_menu WHERE id = 0 ' ;
        $ppl = \DB::select($qry);
        
        return view('user.cadastro', ['ppl' => $ppl, 'links'=> $links] ) ;



        // return view('user.cadastro',[
        //     'title' => $title,
        //     'links' => $links,
        // ]);
    }
    public function homepage() 
    {
        $links = \DB::table('table_menu')->orderBy('ordem', 'asc')->get();
        $title = "homepage do site helpSeniors";
        
        return view('user.index',
        [
            'title' => $title,
            'links' => $links,
        ]);
    }
    

    public function cadastrar() 
    {
        $links = \DB::table('table_menu')->orderBy('ordem', 'asc')->get();
        $title = "cadastro - escolha o tipo de usuario";

        return view('user.cadastro',[
            'title' => $title,
            'links' => $links,
        ]);
    }
    public function cadastrarParceiro() 
    {
        $links = \DB::table('table_menu')->orderBy('ordem', 'asc')->get();
        $title = "cadastro - Parceiro";

        return view('user.cadastroParceiro',
        [
            'title' => $title,
            'links' => $links,
        ]);
    }
    public function cadastrarCliente() 
    {
        $links = \DB::table('table_menu')->orderBy('ordem', 'asc')->get();
        $title = "cadastro - Cliente";

        return view('user.cadastroCliente',
        [
            'title' => $title,
            'links' => $links,
        ]);
    }
    // metodo login view
    public function fazerLogin() 
    {
        $links = \DB::table('table_menu')->orderBy('ordem', 'asc')->get();
        $title = "Login";
        //$users = \DB::table('table_menu')->get();
        
        return view('user.login', 
        [
            'title' => $title,
            'links' => $links,
            'login' => 'header__login-box--none',
        ]);
    }
}
