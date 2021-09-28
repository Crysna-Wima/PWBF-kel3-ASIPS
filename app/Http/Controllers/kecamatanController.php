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
        return view('index',['kecamatan' => $kecamatan]);

    }
}
