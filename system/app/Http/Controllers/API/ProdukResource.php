<?php

namespace App\Http\Controllers\API;

use App\Models\Produk;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProdukResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produk::all();
    }


    public function store()
    {
        if (request('nama') && request('harga') && request('berat') && request('stok') && request('deskripsi')) {

            $produk = new Produk;
            $produk->nama = request('nama');
            $produk->harga = request('harga');
            $produk->berat = request('berat');
            $produk->stok = request('stok');
            $produk->deskripsi = request('deskripsi');
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Field ada yang Kosong"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk Tidak Ditemukan"
        ]);
    }




    public function update($id)
    {
        $produk = Produk::find($id);
        if ($produk) {

            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('harga') ?? $produk->harga;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->stok = request('stok') ?? $produk->stok;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);

            return collect([
                'respond' => 500,
                'message' => "Produk Tidak Ditemukan"
            ]);
        }
    }
    
    public function destroy($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => 'Produk Berhasil Dihapus'
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk Tidak Ditemukan"
        ]);
    }
}
