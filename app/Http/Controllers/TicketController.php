<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $ticket = Ticket::paginate(10);
    }

    public function create(){

    }

    public function store(Request $request){
        $ticket = new Ticket();
        $ticket->komika_id = $request->komika_id;
        $ticket->category = $request->category;
        $ticket->price = $request->price;
        $ticket->location = $request->location;
        $ticket->stock = $request->stock;

        $ticket->save();
    }

    public function edit(){

    }

    public function update(Request $request, $id){
        $ticket = Ticket::find($id);
        $ticket->komika_id = $request->komika_id;
        $ticket->category = $request->category;
        $ticket->price = $request->price;
        $ticket->location = $request->location;
        $ticket->stock = $request->stock;

        $ticket->save();
    }

    public function destroy($id){
        Ticket::destroy($id);
        return redirect()->back();
    }
}
