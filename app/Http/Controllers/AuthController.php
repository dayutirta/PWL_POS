<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        //kita ambil data user
        $user = Auth::user();
        
        //kondisi user=true
        if($user){
            //admin
            if ($user->level_id == '1'){
                return redirect()->intended('admin');
            }
            //manager
            else if ($user->level_id == '2'){
                return redirect()->intended('manager');
            }
        }
        return view('login');
    }
    public function proses_login(Request $request)
    {
        //kita buat validasi username dan pass
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        //ambil data request 
        $credential = $request->only('username','password');
        //dd($credential);
        //cek jika data valid
        if(Auth::attempt($credential)){
            //kalau berhasil
            $user = Auth::user();

            //cek jika admin
// cek jika admin
if ($user->level_id == 1) {
    return redirect()->intended('admin');
} else if ($user->level_id == 2) {
    return redirect()->intended('manager');
}

            return redirect()->intended('/');
        }
        //jika gagal/tidak valid
        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal'=>'Pastikan kembali username dan password benar']);
    }

    public function register()
    {
        //tampil view
        return view('register');
    }

    //aksi form register
    public function proses_register(Request $request)
    {
        //validasi field wajib diisi
        $validator = Validator::make($request->all(),[
            'nama'      => 'required',
            'username'  => 'required|unique:m_user',
            'password'  =>'required'
        ]);
        //kalau gagal
        if($validator->fails()){
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }
        $request['level_id']='2';
        $request['password']=Hash::make($request->password);

        //memasukan data ke table
        UserModel::create($request->all());
        return redirect()->route('login');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
