<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{

    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('template-shop.home', $data);
    }
    function showStore()
    {
        $data['list_produk'] = Produk::all();
        return view('template-shop.store', $data);
    }

    function showProduct()
    {
        $data['list_produk'] = Produk::all();
        return view('template-shop.product', $data);
    }

    function showCheckout(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('template-shop.checkout', $data);
    }

    function showContact()
    {
        return view('template-shop.contact');
    }


    function showLogin()
    {
    }
}
