<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class posyanduController extends Controller
{
    public function index(){

        // mengambil data dari table posyandu
        $posyandu = DB::table('posyandu')->get();

        // mengirim data posyandu ke view index
        return view('index',['posyandu' => $posyandu]);

    }
}
