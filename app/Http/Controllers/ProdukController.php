<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function show(){
        $data['produk'] = Produk::all();
        $data['total'] = $data['produk']->count();
        $data['pengguna'] = Auth::user()->name;
        return view('dasboard', $data);
    }
    public function create(){
        return view('create');
    }
    public function add(Request $request){
        // $validasi = $request->validate([
        //     'nama'=> ['required','min:3'],
        //     'kategori' => ['required'],
        //     'harga' => ['required'],
        //     'stok' => ['required'],
        //     'gambar' => 'image'
        // ]);
        $filename = '';
        if ($request -> file('gambar')) {
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar', $filename);
        }
        Produk::create([
            'name'=> $request->name,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $filename
        ]);
        return redirect('dasboard');
    }
    public function delete(Request $request){
        $hapus =  Produk::find($request->id);
        Storage::delete('gambar/', $hapus->gambar);
            $hapus->delete();
            return redirect('dasboard');
    }
    public function search(Request $request){
        $data['produk'] = Produk::where ('name','LIKE','%'.$request->cari.'%')
        ->orwhere('kategori','LIKE','%'.$request->cari.'%')
        ->orwhere('harga','LIKE','%'.$request->cari.'%')
        ->orwhere('stok','LIKE','%'.$request->cari.'%')->get();
        $data['total'] = $data['produk']->count();
        $data['pengguna'] = Auth::user()->name;

        return view('dasboard',$data);
    }
    public function edit(Request $request,$id){
        $data['produk'] = Produk::find($id);
        $data['pengguna'] = Auth::user()->name;
        return view('update',$data);
    }
    public function update(Request $request, $id){
        // $data['produk'] = Produk::all();
        // $data['pengguna'] = Auth::user()->name;

        // $validasi = $request->validate([
        //     'nama'=> ['required','min:3'],
        //     'kategori' => ['required'],
        //     'harga' => ['required'],
        //     'stok' => ['required'],
        //     'gambar' => 'image'
        // ]);
        $produk = Produk::where('id',$id)->first();
        if ($request->gambar) {
            Storage::delete('/gambar/'.$produk->gambar);

            $filename = '';
            if ($request-> file('gambar')) {
                $ext = $request->file('gambar')->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $request->file('gambar')->storeAs('/gambar', $filename);
            }
            Produk::where('id',$id)->update([
                'name' =>$request->name,
                'kategori' =>$request->kategori,
                'harga' => $request->harga,
                'stok' =>$request->stok,
                'gambar' =>$filename
            ]);
            return redirect('dasboard');
        }else {
            Produk::where('id',$id)->update([
                'name' =>$request->name,
                'kategori' =>$request->kategori,
                'harga' =>$request->harga,
                'stok' =>$request->stok,
            ]);
        }
        return redirect('dasboard');
    }

}


