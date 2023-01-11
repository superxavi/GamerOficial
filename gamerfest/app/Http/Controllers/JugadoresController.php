<?php

namespace App\Http\Controllers;

use App\Models\Jugadore;
use App\Http\Requests\StorejugadoresRequest;
use App\Http\Requests\UpdatejugadoresRequest;

class JugadoresController extends Controller
{
    public function __construct()
    {

    }
    public function list()
    {
        return Jugadore::all();
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
     * @param  \App\Http\Requests\StorejugadoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejugadoresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function show(jugadores $jugadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function edit(jugadores $jugadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejugadoresRequest  $request
     * @param  \App\Models\jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatejugadoresRequest $request, jugadores $jugadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jugadores  $jugadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(jugadores $jugadores)
    {
        //
    }
}
