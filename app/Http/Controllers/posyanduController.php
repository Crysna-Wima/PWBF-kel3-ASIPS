<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class posyanduController extends Controller
{
    public function index(){

        // mengambil data dari table posyandu
        $posyandu = DB::table('posyandu')->get();

        // mengirim data posyandu ke view index
        return view('posyandu',['posyandu' => $posyandu]);

    }

    public function tambah(){
	    return view('tambah.tambahPosyandu');
    }

    public function store(Request $request){
        DB::table('posyandu')->insert([
            'ID_KELURAHAN' => $request->kelurahan,
            'NAMA_POSYANDU' => $request->nama,
            'ALAMAT_POSYANDU' => $request->alamat,
            'CREATED_AT' => $request->created,
            'UPDATED_AT' => $request->updated,
        ]);
        return redirect('/posyandu');
    }

    public function edit($id){
        $posyandu = DB::table('posyandu')->where('ID_POSYANDU',$id)->get();
        return view('edit.editPosyandu',['posyandu' => $posyandu]);
    }
    public function update(Request $request){
        DB::table('posyandu')->where('ID_POSYANDU',$request->id)->update([
            'ID_KELURAHAN' => $request->kelurahan,
            'NAMA_POSYANDU' => $request->nama,
            'ALAMAT_POSYANDU' => $request->alamat,
            'UPDATED_AT' => $request->updated,
        ]);
        return redirect('/posyandu');
    }    
}
