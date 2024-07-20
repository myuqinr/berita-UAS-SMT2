<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginPage(){
        return view('auth.login');
    }

    public function loginAction(LoginRequest $request){
        $data = $request->validated();

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect()->route('dashboard.index');
        }else{
            return redirect()->back()->with('status-failed', 'Login Gagal.');
        }
    }
    public function registerPage(){
        return view('auth.register');
    }

    public function registerAction(RegisterRequest $request){
        $data = $request->validated();

        $status = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => '0'
        ]);

        if($status){
            return redirect()->route('login')->with('status-success', 'Daftar akun berhasil');
        }
    }

    public function destroy(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function index(){
        $datas = [
            'title' => 'Pengguna',
            'users' => User::all()
        ];

        return view('dashboard.users.index', $datas);
    }
}
