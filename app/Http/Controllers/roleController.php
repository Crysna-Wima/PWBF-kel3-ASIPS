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
        return view('role',['role' => $role]);

    }

    public function tambah(){
	    return view('tambah.tambahRole');
    }

    public function store(Request $request){
        DB::table('role')->insert([
            'ROLE' => $request->role,
        ]);
        return redirect('/role');
    }

    public function edit($id){
        $role = DB::table('role')->where('ID_ROLE',$id)->get();
        return view('edit.editRole',['role' => $role]);
    }
    public function update(Request $request){
        DB::table('role')->where('ID_ROLE',$request->id)->update([
            'ROLE' => $request->role,
        ]);
        return redirect('/role');
    }  
}