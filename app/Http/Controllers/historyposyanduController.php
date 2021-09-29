<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class historyPosyanduController extends Controller
{
    public function index(){

        // mengambil data dari table history_posyandu
        $historyPosyandu = DB::table('history_posyandu')->get();

        // mengirim data history posyandu ke view index
        return view('index',['history_posyandu' => $historyPosyandu]);

    }
}