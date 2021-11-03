<?php

namespace App\Http\Controllers;

// use App\Models\kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kecamatan;

class kecamatanController extends Controller
{
    public function index(){
        $kecamatan = DB::table('kecamatan')->where('DELETED_AT',null)->get();
        return view('kecamatan',['kecamatan' => $kecamatan]);

    }

    public function store(Request $request){
        $request ->validate([
            'kecamatan' => 'required|max:20|min:3'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('kecamatan')->insert([
            'KECAMATAN' => $request->kecamatan,
            'CREATED_AT' => date('Y-m-d H:i:s'),
            'UPDATED_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/kecamatan')->with('tambah','Data berhasil ditambahkan');
    }

    public function edit($id){
        $kecamatan = DB::table('kecamatan')->where('ID_KECAMATAN',$id)->get();
        return view('edit.editkecamatan',['kecamatan' => $kecamatan]);
    }

    public function update(Request $request){
        $request ->validate([
            'kecamatan' => 'required|max:20|min:3'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('kecamatan')->where('ID_KECAMATAN',$request->id)->update([
            'KECAMATAN' => $request->kecamatan,
            'UPDATED_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/kecamatan')->with('edit','Data berhasil diubah');
    }
    
    public function hapus($id){
        date_default_timezone_set('Asia/Jakarta');
    	DB::table('kecamatan')->where('ID_KECAMATAN',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
 
    	return redirect('/kecamatan')->with('hapus','Data berhasil dihapus');
    }

}

