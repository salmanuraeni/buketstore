<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{

    public function keranjang(){
        $data['keranjang'] = Keranjang::with('produk')->get();
        return view('keranjang', $data);
    }
    function addchart(Produk $produk){
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'anda harus login dulu');
        }

        Keranjang::create([
            'user_id' => auth()->user()->id,
            'produk_id'=> $produk->id,
            'quantity'=> 1
        ]);
        return redirect()->back()->with('sukses', 'produk berhasil ditambahkan ke keranjang');
    }

    function delete(Request $request){
        $delete= Keranjang::find($request->id);
        $keranjang = Keranjang::where('id', $request->id)->delete();
        if ($keranjang) {
            return redirect()->back()->with('sukses', 'produk berhasil dihapus dari keranjang');
        }else {
            return redirect()->back()->with('gagal', 'produk gagal dihapus dari keranjang');
        }
    }

    public  function addkeranjang(Request $request, $id){
        $keranjang = Keranjang::where('produk_id', $id)->first();
        if ($keranjang) {
            // $qty = $keranjang->quantity + $request->qty;
            $keranjang->update([
                'quantity' => 1,
                'user_id' => Auth::user()->id,
                'produk_id' => $id
            ]);
        }else{
            Keranjang::create([
                'user_id' => auth()->user()->id,
                'produk_id'=> $id,
                'quantity'=> 1
            ]);
        }
        return redirect('/keranjang');
    }

}


