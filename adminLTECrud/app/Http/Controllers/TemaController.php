<?php

namespace App\Http\Controllers;

use App\tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarTema(){
        return view("/Tema","crud");
    }
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
     * @param  \App\tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(tema $tema)
    {
        //
    }
}
