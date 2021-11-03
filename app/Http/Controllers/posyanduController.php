<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class posyanduController extends Controller
{
    public function index(){

        // mengambil data dari table posyandu
        $posyandu = DB::table('posyandu')->where('DELETED_AT',null)->get();
        $jumlah = DB::table('kelurahan')->count();

        // mengirim data posyandu ke view index
        return view('posyandu',['posyandu' => $posyandu],['jumlah' =>$jumlah]);

    }

    public function tambah(){
	    return view('tambah.tambahPosyandu');
    }

    public function store(Request $request){
        $request ->validate([
            'kelurahan' => 'required|exists:kelurahan,ID_KELURAHAN',
            'nama' => 'required|max:50|min:3',
            'alamat' => 'required|max:300|min:3'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('posyandu')->insert([
            'ID_KELURAHAN' => $request->kelurahan,
            'NAMA_POSYANDU' => $request->nama,
            'ALAMAT_POSYANDU' => $request->alamat,
            'CREATED_AT' => date('Y-m-d H:i:s'),
            'UPDATED_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/posyandu')->with('tambah','Data berhasil ditambahkan');
    }

    public function edit($id){
        $jumlah = DB::table('kelurahan')->count();
        $posyandu = DB::table('posyandu')->where('ID_POSYANDU',$id)->get();
        return view('edit.editPosyandu',['posyandu' => $posyandu],['jumlah' =>$jumlah]);
    }
    public function update(Request $request){
        $request ->validate([
            'kelurahan' => 'required|exists:kelurahan,ID_KELURAHAN',
            'nama' => 'required|max:50|min:3',
            'alamat' => 'required|max:300|min:3'
        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('posyandu')->where('ID_POSYANDU',$request->id)->update([
            'ID_KELURAHAN' => $request->kelurahan,
            'NAMA_POSYANDU' => $request->nama,
            'ALAMAT_POSYANDU' => $request->alamat,
            'UPDATED_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/posyandu')->with('edit','Data berhasil diubah');
    }
    public function hapus($id){
        date_default_timezone_set('Asia/Jakarta');
    	DB::table('posyandu')->where('ID_POSYANDU',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
 
    	return redirect('/posyandu')->with('hapus','Data berhasil dihapus');
    }
    
}
