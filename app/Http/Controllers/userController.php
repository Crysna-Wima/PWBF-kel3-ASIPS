<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){

        // mengambil data dari table user
        $user = DB::table('user')->get();

        // mengirim data user ke view index
        return view('index',['user' => $user]);

    }
}