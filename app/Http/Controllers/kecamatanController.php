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

        // mengambil data dari table tbl_siswa
        $kecamatan = DB::table('kecamatan')->get();

        // mengirim data siswa ke view index
        return view('index',['kecamatan' => $kecamatan]);

    }
}
