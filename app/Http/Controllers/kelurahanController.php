<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kelurahanController extends Controller
{
    public function index(){

        // mengambil data dari table kelurahan
        $kelurahan = DB::table('kelurahan')->where('DELETED_AT',null)->get();
        $jumlah = DB::table('kecamatan')->count();

        // mengirim data kelurahan ke view index
        return view('kelurahan',['kelurahan' => $kelurahan],['jumlah' =>$jumlah]);
    }

    public function store(Request $request){
        $request ->validate([
            'id_kecamatan' => 'required|exists:kecamatan,ID_KECAMATAN',
            'kelurahan' => 'required|max:20|min:3'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('kelurahan')->insert([
            'ID_KECAMATAN' => $request->id_kecamatan,
            'KELURAHAN' => $request->kelurahan,
            'CREATED_AT' => date('Y-m-d H:i:s'),
            'UPDATED1_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/kelurahan')->with('tambah','Data berhasil ditambahkan');
    }
    public function edit($id){
            $jumlah = DB::table('kecamatan')->count();
            $kelurahan = DB::table('kelurahan')->where('ID_KELURAHAN',$id)->get();
            return view('edit.editKelurahan',['kelurahan' => $kelurahan],['jumlah' =>$jumlah]);
        }
    public function update(Request $request){
        $request ->validate([
            'id_kecamatan' => 'required|exists:kecamatan,ID_KECAMATAN',
            'kelurahan' => 'required|max:20|min:3'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('kelurahan')->where('ID_KELURAHAN',$request->id)->update([
            'ID_KECAMATAN' => $request->id_kecamatan,
            'KELURAHAN' => $request->kelurahan,
            'UPDATED1_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/kelurahan')->with('edit','Data berhasil diubah');
    } 
    public function hapus($id){
        date_default_timezone_set('Asia/Jakarta');
    	DB::table('kelurahan')->where('ID_KELURAHAN',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
 
    	return redirect('/kelurahan')->with('hapus','Data berhasil dihapus');
    }
   
}
