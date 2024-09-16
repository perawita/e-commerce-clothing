<?php

namespace App\Http\Controllers;

class CheckOutController extends Controller
{
    public function check_out($id_user){
        try {
            if (empty($id_user)) {
                return redirect()->back()->withErrors(['success' => false, 'message' => 'Invalid ID User'], 400);
            }

            return view('shop.content.shopping-check-out.index', ['id_user' => $id_user]);

        } catch (\Exception $err) {
            return response()->json(['success' => false, 'error' => $err->getMessage()], 500);
        }
    }
}