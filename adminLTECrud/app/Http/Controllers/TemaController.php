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
  
    public function index()
    {
        $temas=tema::all();
        return view("temas.index",compact("temas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tema= new tema();
        return view("temas.create",compact("tema"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
            "nombre"=>"required",
            "categoria"=>"required"
        ]);
        $temaso= new tema([
            "nombre"=>$request->get("nombre"),
            "categoria"=>$request->get("categoria")

        ]);
        $temaso->save();
        return redirect()->route("temas.index");
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
        return view('temas.create',compact('tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tema $temas)
    {
        $temas->save();
       return redirect()->route("temas.index");
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
