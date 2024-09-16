<?php

namespace App\Http\Controllers;

/**
 * Class ini berfungsi sebagai controller pada 
 * halaman keranjang belanja user.
 * 
 * Class ini berugas untuk memanagement 
 * controller pada halaman keranjang belanja.
 */
class CartShopController extends Controller
{
    public function cart($id_cart){
        // Gunakan perbnadingan yang login dan id card di parameter
        try {
            if (empty($id_cart)) {
                return redirect()->back()->withErrors(['success' => false, 'message' => 'Invalid ID Cart'], 400);
            }

            return view('shop.content.shopping-cart.index', ['id_cart' => $id_cart]);


        } catch (\Exception $err) {
            return response()->json(['success' => false, 'error' => $err->getMessage()], 500);
        }
    }
}