<?php
 
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Support\Facades\Validator; 
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;
use App\Http\Controllers\AuthNativeController;

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
        $email = $request->email;
        $password   = $request->password;
        // echo $email;
   

        // $request->validate($request->all(),[
        //     'email' => 'required|email',
        //  ]);
        //  $request->validate($request, [
        //     'email' => 'required|email',
        // ]);
        //    $user_data = array(
        //     'email'  => $request->get('email'),
        //     'password' => $request->get('password')
        //    );
      
        //    $user_data = array(
        //     'email'  => $request->get('email'),
        //     'password' => $request->get('password')
        //    );
      
        //    if(Auth::attempt($user_data))
        //    {
        //     return redirect('main/successlogin');
        //    }
        //    else
        //    {
        //     return back()->with('error', 'Wrong Login Details');
        //    }
       
        // if (Auth::attempt(['email' => $email, 'password' => $password]))
        // {
        //     return redirect()->intended('layouts.showPertanyaan');
        // // }
        // $query = DB::table('profil')->get();
        // if(["email=$email"]){

            return redirect('/pertanyaan');
            return view('/layouts/showPertanyaan', compact('query'));
        // }
       
      
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