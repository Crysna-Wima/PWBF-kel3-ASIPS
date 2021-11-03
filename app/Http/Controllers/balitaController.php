<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class balitaController extends Controller
{
    public function index(){

        // mengambil data dari table balita
        $balita = DB::table('balita')->where('DELETED_AT',null)->get();
        $jumlah = DB::table('posyandu')->count();

        // mengirim data balita ke view index
        return view('balita',['balita' => $balita],['jumlah' =>$jumlah]);

    }

    public function tambah(){
	    return view('tambah.tambahBalita');
    }

    public function store(Request $request){
        $request ->validate([
            'posyandu' => 'required|exists:posyandu,ID_POSYANDU',
            'nama' => 'required|max:50|min:1',
            'NIK' => 'required|max:16|min:16',
            'Ortu' => 'required|max:50|min:1',
            'lahir' => 'required',
            'jk' => 'required',
            'status' => 'required|max:6',

        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('balita')->insert([
            'ID_POSYANDU' => $request->posyandu,
            'NAMA_BALITA' => $request->nama,
            'NIK_ORANG_TUA' => $request->NIK,
            'NAMA_ORANG_TUA' => $request->Ortu,
            'TGL_LAHIR_BALITA' => $request->lahir,
            'JENIS_KELAMIN_BALITA' => $request->jk,
            'STATUS' => $request->status,
            'CREATED_AT' => date('Y-m-d H:i:s'),
            'UPDATED_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/balita')->with('tambah','Data berhasil ditambahkan');
    }
    public function edit($id){
        $jumlah = DB::table('posyandu')->count();
        $balita = DB::table('balita')->where('ID_BALITA',$id)->get();
        return view('edit.editBalita',['balita' => $balita],['jumlah' =>$jumlah]);
    }
    public function update(Request $request){
        $request ->validate([
            'posyandu' => 'required|exists:posyandu,ID_POSYANDU',
            'nama' => 'required|max:50|min:1',
            'NIK' => 'required|max:16|min:16',
            'Ortu' => 'required|max:50|min:1',
            'lahir' => 'required',
            'jk' => 'required',
            'status' => 'required|max:6',

        ]);
        date_default_timezone_set('Asia/Jakarta');
        DB::table('balita')->where('ID_BALITA',$request->id)->update([
            'ID_POSYANDU' => $request->posyandu,
            'NAMA_BALITA' => $request->nama,
            'NIK_ORANG_TUA' => $request->NIK,
            'NAMA_ORANG_TUA' => $request->Ortu,
            'TGL_LAHIR_BALITA' => $request->lahir,
            'JENIS_KELAMIN_BALITA' => $request->jk,
            'STATUS' => $request->status,
            'UPDATED_AT' => date('Y-m-d H:i:s'),
        ]);
        return redirect('/balita')->with('edit','Data berhasil diubah');
    }
    public function hapus($id){
        date_default_timezone_set('Asia/Jakarta');
    	DB::table('balita')->where('ID_BALITA',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
    	return redirect('/balita')->with('hapus','Data berhasil dihapus');
    }

}