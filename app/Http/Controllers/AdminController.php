<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    return view('login.loginAdmin');
    }
    public function process(Request $request){
    $validateData = $request->validate([
    'username' => 'required',
    'password' => 'required',
    ]);
    $result = Admin::where('username', '=', $validateData['username'])->first();

    if($result){
    if (($request->password == $result->password))
    {
    session(['username' => $request->username]);
    return redirect('dashboardadmin');
    }
    else {
    return back()->withInput()->with('pesan',"Login Gagal");
    }
    }
    else{
    return back()->withInput()->with('pesan',"Login Gagal");
    }
    }
    public function logout(){
    session()->forget('username');
    return redirect('login')->with('pesan','Logout berhasil');
    }
}
