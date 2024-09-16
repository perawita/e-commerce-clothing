<?php

namespace App\Http\Controllers;

class SearchController extends Controller
{

    /**
     * Mencarikan produk berdasarkan keyword yang di cari.
     * 
     * Fungsi ini di gunakan pada halaman hasil pencarian.
     * 
     * @param string $name_product sebagai parameter yang menyimpan nilai untuk 
     * keyword yang di gunakan user sebagai kunci pencarian
     * 
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     * Mengembalikan halaman view untuk hasil pencarian produk jika variable $nama_product tidak kosong,
     * atau redirect kembali ke halaman sebelumnya dengan pesan error jika variable $nama_product kosong.
     * Jika terjadi kesalahan sistem, akan dikembalikan JSON response dengan pesan error.
     */
    public function search($name_product){
        try{
            if(empty($name_product)) return redirect()->back()->withErrors(['success' => false, 'message' => 'Invalid product ID'], 400);

            return view('shop.content.search-list.index', ['name_product' => $name_product]);
        }catch(\Exception $err){
            return response()->json(['success' => false, 'error' => $err->getMessage()], 500);
        }
    }
}