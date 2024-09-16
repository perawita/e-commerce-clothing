<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function orders($id_user, $id_invoice){
        try{
            if(empty($id_user||$id_invoice)) return redirect()->back()->withErrors(['success' => false, 'message' => 'Invalid User ID or Invalid Invoice ID'], 400);

            return view('shop.content.my-orders.index', ['id_user' => $id_user, 'id_invoice' => $id_invoice]);
        }catch(\Exception $err){
            return response()->json(['success' => false, 'error' => $err->getMessage()], 500);
        }
    }
}