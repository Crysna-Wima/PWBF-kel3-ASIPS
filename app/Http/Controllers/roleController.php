<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class roleController extends Controller
{
    public function index(){

        // mengambil data dari table role
        $role = DB::table('role')->get();

        // mengirim data role ke view index
        return view('index',['role' => $role]);

    }
}