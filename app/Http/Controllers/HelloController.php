<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHelloRequest;
use App\Http\Requests\UpdateHelloRequest;
use App\Models\Hello;

class HelloController extends Controller
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
     * @param  \App\Http\Requests\StoreHelloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHelloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function show(Hello $hello)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function edit(Hello $hello)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHelloRequest  $request
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHelloRequest $request, Hello $hello)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hello  $hello
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hello $hello)
    {
        //
    }
}
