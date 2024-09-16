<?php

namespace App\Http\Controllers;

class SettingController extends Controller
{
    public function settings($id_user){
        try{
            if(empty($id_user)) return redirect()->back()->withErrors(['success' => false, 'message' => 'Invalid User ID'], 400);

            return view('shop.content.settings.index', ['id_user' => $id_user]); 
        }catch(\Exception $err){
            return response()->json(['success' => false, 'error' => $err->getMessage()], 500);
        }
    }
}