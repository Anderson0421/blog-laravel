<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return "Creando un nuevo articulo";

    }

    public function store(Request $request)
    {
        return "Mostrando los articulos";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "El articulo nro ({$id})";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Editando el articulo ({$id})";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
