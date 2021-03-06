<?php

namespace App\Http\Controllers;

use App\Komika;
use Illuminate\Http\Request;

class KomikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Komika  $komika
     * @return \Illuminate\Http\Response
     */
    public function show(Komika $komika)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Komika  $komika
     * @return \Illuminate\Http\Response
     */
    public function edit(Komika $komika)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Komika  $komika
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komika $komika)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Komika  $komika
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komika $komika)
    {
        //
    }

    public function topten()
	{
		$komikas = Komika::take(10)->get();
        return view('', compact('komikas'));	
	}

}
