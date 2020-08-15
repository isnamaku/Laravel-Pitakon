<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class pertanyaanController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*public function index(){

        $query = DB::table('proyek')->get();
 
    	// mengirim data pegawai ke view index
    	return view('layouts/table',['proyek' => $query]);
       
    }*/
    
    /*public function showPertanyaan(){
        return view('layouts.showPertanyaan');
    }*/

    public function create(){
        return view('layouts.form');
    }

    public function store(Request $request){
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => $request["tanggal_dibuat"]
        ]);
        return redirect('/pertanyaan');
    }
    
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('layouts.showPertanyaan', compact('pertanyaan'));
    }

    public function show($id){
        $p = DB::table('pertanyaan')->where('id', $id)->first();
        //dd($p);
         // mengirim data pegawai ke view index
         return view('layouts.show', compact('p'));
        
   
     }

    public function edit($id){
        $p = DB::table('pertanyaan')->where('id', $id)->first();
        return view('layouts.editPertanyaan', compact('p'));
    }

    public function update($id, Request $request){
        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request ['judul'],
                        'isi' => $request ['isi']
                    ]);
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan');
    }

}
