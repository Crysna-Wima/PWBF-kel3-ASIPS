<?php

namespace App\Http\Controllers;

// use App\Models\kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kecamatanController extends Controller
{
    public function index(){
        // $kecamatan = kecamatan::all();
        // return view('index',compact('kecamatan'));

        $kecamatan = DB::table('kecamatan')->get();
        return view('kecamatan',['kecamatan' => $kecamatan]);

    }

    public function tambah(){
	    return view('tambah.tambahKecamatan');
    }

    public function store(Request $request){
        DB::table('kecamatan')->insert([
            'KECAMATAN' => $request->kecamatan,
            'CREATED_AT' => $request->created,
            'UPDATED_AT' => $request->updated,
        ]);
        return redirect('/kecamatan');
    }
    public function edit($id){
        $kecamatan = DB::table('kecamatan')->where('ID_KECAMATAN',$id)->get();
        return view('edit.editkecamatan',['kecamatan' => $kecamatan]);
    }
    public function update(Request $request){
        DB::table('kecamatan')->where('ID_KECAMATAN',$request->id)->update([
            'KECAMATAN' => $request->kecamatan,
            'UPDATED_AT' => $request->updated,
        ]);
        return redirect('/kecamatan');
    }
}

