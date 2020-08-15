<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ItemController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $query = DB::table('proyek')->get();
 
    	// mengirim data pegawai ke view index
    	return view('layouts/table',['proyek' => $query]);
       
    }
    
    public function create(){
        return view('layouts/form');
    }


}
