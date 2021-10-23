<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kelurahanController extends Controller
{
    public function index(){

        // mengambil data dari table kelurahan
        $kelurahan = DB::table('kelurahan')->get();

        // mengirim data kelurahan ke view index
        return view('kelurahan',['kelurahan' => $kelurahan]);
    }

    public function tambah(){
	    return view('tambah.tambahKelurahan');
    }

    public function store(Request $request){
        DB::table('kelurahan')->insert([
            'ID_KECAMATAN' => $request->id_kecamatan,
            'KELURAHAN' => $request->kelurahan,
            'CREATED_AT' => $request->created,
            'UPDATED1_AT' => $request->updated,
        ]);
        return redirect('/kelurahan');
    }
    public function edit($id){
            $kelurahan = DB::table('kelurahan')->where('ID_KELURAHAN',$id)->get();
            return view('edit.editKelurahan',['kelurahan' => $kelurahan]);
        }
    public function update(Request $request){
        DB::table('kelurahan')->where('ID_KELURAHAN',$request->id)->update([
            'ID_KECAMATAN' => $request->id_kecamatan,
            'KELURAHAN' => $request->kelurahan,
            'UPDATED1_AT' => $request->updated,
        ]);
        return redirect('/kelurahan');
    }    
}
