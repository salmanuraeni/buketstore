<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use tidy;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authentikasi(Request $request){
        $validasi = $request->validate([
            'email'=>['required'],
            'password'=>['required'],
        ]);
        if (Auth::attempt($validasi)) {
            if (Auth::user()->levels_id == 1) {
                return redirect('/dasboard');
            }else {
                return redirect('/home');
            }
            return redirect('home')->with('pesan', 'login anda berhasil');
        }
        return redirect()->back()->with('pesan','login anda gagal');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    // public function home(Request $request){
    //     $data['produk'] = Produk::all();
    //     return view('home',$data);
    // }
    public function produk(){
        return view('produk');
    }
    public function register(){
        return view('/register');
    }
    public function adm(){
        $data['produk'] = Produk::all();
        $data['total'] = $data['produk']->count();
        $data['pengguna'] = Auth::user()->name;
        return view('home',$data);
    }
    public function detailproduk(Request $request){
        $data['produk'] = Produk::find($request->id);
        return view('detailproduk', $data);
    }
    public function pesan(){
        return view('/pesan');
    }
    public function show(){
        $data['user'] = User::orderby('name','desc')->get();
        $data['total_user'] = User::count();
        return view('user', $data);
    }
    public function search(Request $request){
        $data['user'] = User::where('name', $request->cari)->orwhere('email', $request->cari->get());
        $data['total_user'] = $data['user']->count();
        return view('user', $data);
    }
    public function create(){
        $data['levels'] = Level::all();
        return view('/user-create', $data);
    }
    public function add(Request $request){
        $validateData = $request->validate([
            'name' =>['required', 'min:3'],
            'email' =>['required', 'email'],
            'levels_id' =>'required',
            'gambar' =>'image'
        ]);
        $filename ='';
        if ($request->file('gambar')) {
            $extfile = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().".". $extfile;
            $request->file('gambar')->storeAs('gambar', $filename);
        }
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password'=>$request->password ? bcrypt($request->password): DB ::raw('password'),
            'levels_id'=>$request->levels_id
        ]);
        return  redirect('/user');
    }
    public function delete(Request $request){
        $user = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();
        return redirect('/user');
    }

    public function edit(Request $request){
        $data['user'] = User::find($request->id);
        return view('user-update', $data);
    }
    public function update(Request $request){
        $update = User::where('id',$request->id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password ? bcrypt($request->password): DB::raw('password'),
        ]);
        $produk = User::findOrFail($request->id);
        if ($produk->gambar) {
            Storage::delete('gambar'. $produk->foto);
        }
        return redirect('/user');
    }
    public function tampil(){
        $data['user'] = User::orderby('name','desc')->get();
        $data['total_user'] = User::count();
        return view('kategori', $data);
    }



}