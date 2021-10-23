<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class balitaController extends Controller
{
    public function index(){

        // mengambil data dari table balita
        $balita = DB::table('balita')->get();

        // mengirim data balita ke view index
        return view('balita',['balita' => $balita]);

    }

    public function tambah(){
	    return view('tambah.tambahBalita');
    }

    public function store(Request $request){
        DB::table('balita')->insert([
            'ID_POSYANDU' => $request->posyandu,
            'NAMA_BALITA' => $request->nama,
            'NIK_ORANG_TUA' => $request->NIK,
            'NAMA_ORANG_TUA' => $request->Ortu,
            'TGL_LAHIR_BALITA' => $request->lahir,
            'JENIS_KELAMIN_BALITA' => $request->jk,
            'STATUS' => $request->status,
            'CREATED_AT' => $request->created,
            'UPDATED_AT' => $request->updated,
        ]);
        return redirect('/balita');
    }
    public function edit($id){
        $balita = DB::table('balita')->where('ID_BALITA',$id)->get();
        return view('edit.editBalita',['balita' => $balita]);
    }
    public function update(Request $request){
        DB::table('balita')->where('ID_BALITA',$request->id)->update([
            'ID_POSYANDU' => $request->posyandu,
            'NAMA_BALITA' => $request->nama,
            'NIK_ORANG_TUA' => $request->NIK,
            'NAMA_ORANG_TUA' => $request->Ortu,
            'TGL_LAHIR_BALITA' => $request->lahir,
            'JENIS_KELAMIN_BALITA' => $request->jk,
            'STATUS' => $request->status,
            'UPDATED_AT' => $request->updated,
        ]);
        return redirect('/balita');
    }
}