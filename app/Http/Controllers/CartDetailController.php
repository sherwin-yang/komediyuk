<?php

namespace App\Http\Controllers;

use App\CartDetail;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function store(Request $request){
        $cartDetail = new CartDetail();
        $cartDetail->tiket_id = $request->tiket_id;
        $cartDetail->cart_id = $request->cart_id;
        $cartDetail->quantity = $request->quantity;

        $cartDetail->save();
    }

    public function update(Request $request,$id){
        $cartDetail = CartDetail::find($id);
        $cartDetail->tiket_id = $request->tiket_id;
        $cartDetail->cart_id = $request->cart_id;
        $cartDetail->quantity = $request->quantity;

        $cartDetail->save();
    }

    public function index(){
        $cartDetail = CartDetail::paginate(10);

    }

    public function destroy($id){
        $cartDetail = CartDetail::destroy($id);

        return redirect()->back();
    }
}
