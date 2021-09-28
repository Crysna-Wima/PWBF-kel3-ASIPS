<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class historyposyanduController extends Controller
{
    public function index(){

        // mengambil data dari table historyposyandu
        $historyposyandu = DB::table('historyposyandu')->get();

        // mengirim data history posyandu ke view index
        return view('index',['historyposyandu' => $historyposyandu]);

    }
}