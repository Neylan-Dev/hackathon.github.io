<?php

namespace App\Http\Controllers;

use App\Banca;
use Illuminate\Http\Request;

class BancaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Banca.index');
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
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function show(Banca $banca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function edit(Banca $banca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banca $banca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banca  $banca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banca $banca)
    {
        //
    }
}
