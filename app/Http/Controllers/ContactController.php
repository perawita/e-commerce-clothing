<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{    
    /**
    * Menangani permintaan kontak berdasarkan ID produk.
    * 
    * Fungsi ini digunakan untuk mengelola permintaan kontak yang berkaitan dengan produk.
    * Jika pengguna membutuhkan bantuan dengan produk tertentu atau ingin menghubungi pengelola,
    * halaman kontak yang sesuai akan ditampilkan.
    * 
    * Jika ID produk adalah 'help', maka halaman bantuan akan ditampilkan.
    * 
    * @param string $id_product ID produk untuk menampilkan halaman tanya jawab.
    * 
    * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
    * Mengembalikan halaman view untuk kontak jika variable $nama_product tidak kosong,
     * atau redirect kembali ke halaman sebelumnya dengan pesan error jika variable $nama_product kosong.
    * Jika terjadi kesalahan sistem, akan dikembalikan JSON response dengan pesan error.
    */
    public function contact_inquiry($id_product)
    {
        try {
            if (empty($id_product)) {
                return redirect()->back()->withErrors(['success' => false, 'message' => 'Invalid product ID'], 400);
            }

            if ($id_product === 'help') {
                return view('shop.content.contact.index', ['id_product' => $id_product]);
            }

            return view('shop.content.contact.index', ['id_product' => $id_product]);

        } catch (\Exception $err) {
            return response()->json(['success' => false, 'error' => $err->getMessage()], 500);
        }
    }
}
