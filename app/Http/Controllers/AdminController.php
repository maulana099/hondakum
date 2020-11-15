<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Auth;
use Alert;
use App\Dokumentasi;
use App\Pengunjung;
use App\Promo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function dashboard(){
        $data_dokumentasi = Dokumentasi::all();
        $data_count = DB::table('dokumentasi')->selectRaw('count(*) count')->first();

        $model_dokumentasi['data_dokumentasi'] = $data_dokumentasi;
        $model_dokumentasi['data_count'] = $data_count;
        //pengunjung
        $data_pengunjung = Pengunjung::all();
        $pengunjung_count = DB::table('pengunjung')->selectRaw('count(*) count')->first();

        $model_pengunjung['data_pengunjung'] = $data_pengunjung;
        $model_pengunjung['pengunjung_count'] = $pengunjung_count;
        //promo
        $data_promo = Promo::all();
        $promo_count = DB::table('pengunjung-promo')->selectRaw('count(*) count')->first();

        $model_promo['data_promo'] = $data_promo;
        $model_promo['promo_count'] = $promo_count;

        return view('admin.dashboard',compact('model_dokumentasi','model_pengunjung','model_promo'));
    }

    public function login_post(Request $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/admin-honda');
        }
        Alert()->error('Login gagal', 'LOGIN');
        return redirect('/admin-honda/login')->with('alert','Password atau Email, Salah !');
    }

    // public function login_post(Request $request){
    // 	$username = $request->username;
    //     $password = $request->password;

    //     $data = Admin::where('username',$username)->first();
    //     if($data){
    //         if(Hash::check($password,$data->password)){
    //             Session::put('nama_lengkap',$data->nama_lengkap);
    //             Session::put('username',$data->username);
    //             Session::put('login',TRUE);
    //             return redirect('/admin-honda');
    //         }
    //         else{
    //             return redirect('/admin-honda/login')->with('alert','Password atau Username, Salah !');
    //         }
    //     }
    //     else{
    //         return redirect('/admin-honda/login')->with('alert','Password atau Username, Salah!');
    //     }
    // }

    public function logout(){
        Auth::logout();
        Alert()->success('Logout berhasil', 'LOGOUT');
        return redirect('/admin-honda/login');
    }

    public function loginku(){
    	return view ('admin.login');
    }

    public function register(){
    	return view ('admin.register');
    }

    public function add_register(Request $request){
    	$this->validate($request, [
            'nama_lengkap' => 'required|min:4',
            'email' => 'required|min:4',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data_register =  new User();
        $data_register->nama_lengkap = $request->nama_lengkap;
        $data_register->email = $request->email;
        $data_register->password = bcrypt($request->password);
        $data_register->save();
        return redirect ('/admin-honda/login');
    }

    public function profile($id){
        $data_register = User::find($id);
        return view ('admin.profile',compact('data_register'));
    }

    public function profile_update(Request $request, $id){
        $data_register = User::find($id);
        $data_register->nama_lengkap = $request->nama_lengkap;
        $data_register->email = $request->email;
        $data_register->password = bcrypt($request->password);
        $data_register->save();
        Alert()->success('Update Profile berhasil', 'UPDATEE');
        return redirect ('/admin-honda/login');
    }
}
