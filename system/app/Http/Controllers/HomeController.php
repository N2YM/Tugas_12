<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;


class HomeController extends Controller
{

    function showBeranda()
    {
        return view('beranda');
    }
    function showProduk()
    {
        return view('produk');
    }

    function showKategori()
    {
        return view('kategori');
    }
    function showLogin()
    {
    }

    public function testCollection()
    {
        $list_bike = ['Honda', 'Yamaha', 'Kaeasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
        $list_bike = collect($list_bike);
        $list_produk = Produk::all();

        // Sorting
        // SortBy Harga Terendah
        // dd($list_produk->sortBy('harga')[3]);
        // dd($list_produk->sortByDesc('harga'));
        // $data['list'] = $list_produk;
        // return view('test-collection', $data);

        // Map
        // filter
        // $filtered = $list_produk->filter(function($item){
        //     return $item->harga <100000;            
        // });

        // dd($filtered);

        // $sum = $list_produk->sum('stok');
        // dd($sum);

        $data['list'] = Produk::simplepaginate(3);
        return view('test-collection', $data);

        dd($list_bike, $list_produk);
    }

    function testAjax()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}
