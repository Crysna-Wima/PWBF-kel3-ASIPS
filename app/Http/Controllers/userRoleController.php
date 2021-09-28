<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userRoleController extends Controller
{
    public function index(){

        // mengambil data dari table userRole
        $userRole = DB::table('userRole')->get();

        // mengirim data userRole ke view index
        return view('index',['userRole' => $userRole]);

    }
}