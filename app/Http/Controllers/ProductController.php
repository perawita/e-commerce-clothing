<?php 

namespace App\Http\Controllers;

class ProductController extends Controller
{
    
    /**
     * Menampilkan halaman detail produk berdasarkan nama produk yang dipilih.
     * 
     * Fungsi ini digunakan di halaman detail produk. Ketika pengguna menekan
     * salah satu produk yang dipilih dari daftar produk, halaman detail produk
     * akan ditampilkan.
     * 
     * @param string $name_product Nama produk yang akan ditampilkan di halaman detail.
     * 
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     * Mengembalikan halaman view untuk detail produk jika variable $nama_product tidak kosong,
     * atau redirect kembali ke halaman sebelumnya dengan pesan error jika variable $nama_product kosong.
     * Jika terjadi kesalahan sistem, akan dikembalikan JSON response dengan pesan error.
     */
    public function product($name_product){
        try{
            if(empty($name_product)) return redirect()->back()->withErrors(['success' => false, 'message' => 'Invalid product ID'], 400);

            return view('shop.content.product.index', ['name_product' => $name_product]);
        }catch(\Exception $err){
            return response()->json(['success' => false, 'error' => $err->getMessage()], 500);
        }
    }
}