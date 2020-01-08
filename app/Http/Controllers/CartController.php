<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        $cart = new Cart();
        $cart->user_id = $request->user_id;

        $cart->save();
    }

    public function update(Request $request,$id){
        $cart = Cart::find($id);
        $cart->user_id = $request->user_id;

        $cart->save();
    }

    public function index(){
        $cart = Cart::paginate(10);

    }

    public function destroy($id){
        $cart = Cart::destroy($id);

        return redirect()->back();
    }
}
