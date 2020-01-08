<?php

namespace App\Http\Controllers;

use App\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function store(Request $request){
        $tiket = new Tiket();
        $tiket->komika_id = $request->komika_id;
        $tiket->category = $request->category;
        $tiket->price = $request->price;
        $tiket->location = $request->location;
        $tiket->stock = $request->stock;

        $tiket->save();
    }

    public function update(Request $request,$id){
        $tiket = Tiket::find($id);
        $tiket->komika_id = $request->komika_id;
        $tiket->category = $request->category;
        $tiket->price = $request->price;
        $tiket->location = $request->location;
        $tiket->stock = $request->stock;

        $tiket->save();
    }

    public function index(){
        $cartDetail = Tiket::paginate(10);

    }

    public function destroy($id){
        $cartDetail = Tiket::destroy($id);

        return redirect()->back();
    }
}
