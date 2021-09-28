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

        // mengambil data dari table kecamatan
        $kecamatan = DB::table('kecamatan')->get();

        // mengirim data kecaman ke view index
        return view('index',['kecamatan' => $kecamatan]);

    }
}
