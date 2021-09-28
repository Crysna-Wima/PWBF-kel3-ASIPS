<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userRoleController extends Controller
{
    public function index(){

        // mengambil data dari table user_role
        $userRole = DB::table('user_role')->get();

        // mengirim data user role ke view index
        return view('index',['user_role' => $userRole]);

    }
}