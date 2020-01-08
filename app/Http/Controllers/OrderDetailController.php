<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index(){
        $orderDetail = OrderDetail::paginate(10);
    }

    public function create(){

    }

    public function store(Request $request){
        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $request->order_id;
        $orderDetail->ticket_id = $request->ticket_id;
        $orderDetail->quantity = $request->quantity;
        $orderDetail->status = $request->status;

        $orderDetail->save();
    }

    public function edit(){

    }

    public function update(Request $request, $id){
        $orderDetail = OrderDetail::find($id);
        $orderDetail->order_id = $request->order_id;
        $orderDetail->ticket_id = $request->ticket_id;
        $orderDetail->quantity = $request->quantity;
        $orderDetail->status = $request->status;

        $orderDetail->save();
    }

    public function destroy($id){
        OrderDetail::destroy($id);
        return redirect()->back();
    }
}
