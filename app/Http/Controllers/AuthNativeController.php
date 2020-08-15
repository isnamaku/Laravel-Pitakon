<?php
 
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Validator;
use Auth;
 
class AuthNativeController extends BaseController
{
    public function index(){
        return view('layouts.login');
    }
    public function indexRegister(){
        return view('layouts.registration');
    }


    public function auth(Request $request){
        // $email = $req->email;
        // $pwd   = $req->password;
        // if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
        //     return "Hai ". Auth::profil()->name;
        // }else{
        //     return "Maaf email atau password yang anda masukan tidak sesuai.";
        // }

        $request->validate($request->all(),[
            'email' => 'required|email',
         ]);
      
           $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );
      
           if(Auth::attempt($user_data))
           {
            return redirect('main/successlogin');
           }
           else
           {
            return back()->with('error', 'Wrong Login Details');
           }
      
    }

    public function createAccount(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $foto = $request->input('foto');

        DB::table('profil')->insert(
            ['nama_lengkap' => $name, 'email'=> $email , 'password'=>$password, 'foto'=>$foto]
        );
      
        return view('/layouts/login');
       
    }



}