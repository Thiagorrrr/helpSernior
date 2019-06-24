<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Auth;
use Exception;

class DashboardController extends Controller
{
    private $repository;
    private $validator;
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    public function index(Request $repository)

    {

        // $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();
        
        // dd($repository);
        // $dado_alt = 1;
    
        // $qry = \DB::table('users')->where('id', '=', $dado_alt)->get();
        
        // $title = "helpSeniors - usuario";
        

        // return view('user.dashboard', ['data' => $qry[0],  'title' => $title,'links'=> $links] );
    }


    public function auth(Request $request)
    {

        $data = [
            'email' => $request->get('username'),
            'password'=> $request->get('password')
        ];

        $links = \DB::table('table_menu')->orderBy('order', 'asc')->get();
        
      
        
        $title = "helpSeniors - usuario";
        


        try {


            if (env("PASSWORD_HASH")) 
            {
                Auth::attempt($data, true);

            }else {
               $user = $this->repository->findWhere(['email' =>$request->get('username')])->first();

               if (!$user)
               throw new Exception("E-mail informado é inválido.");

               if ($user->password != $request->get('password') ) 

               throw new Exception("Senha informada é inválida.");
              
               Auth::login($user);

               $dado_alt = $request->get('username');
    
               $qry = \DB::table('users')->where('email', '=', $dado_alt)->get();

            
            }
            
            return view('user.dashboardUser', ['data' => $qry[0],  'title' => $title,'links'=> $links] );
            
        }catch (Exception $e){
            return $e->getMessage();
        }
      
    }
}
