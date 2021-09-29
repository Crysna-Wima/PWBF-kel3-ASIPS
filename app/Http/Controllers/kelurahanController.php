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
        return view('index',['kelurahan' => $kelurahan]);

    }
}
