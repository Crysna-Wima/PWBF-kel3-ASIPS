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
        return view('index',['balita' => $balita]);

    }
}