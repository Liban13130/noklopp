<?php

namespace App\Http\Controllers;

use App\Models\Cracking;
use App\Http\Requests\StoreCrackingRequest;
use App\Http\Requests\UpdateCrackingRequest;

class CrackingController extends Controller
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
     * @param  \App\Http\Requests\StoreCrackingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCrackingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cracking  $cracking
     * @return \Illuminate\Http\Response
     */
    public function show(Cracking $cracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cracking  $cracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Cracking $cracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCrackingRequest  $request
     * @param  \App\Models\Cracking  $cracking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCrackingRequest $request, Cracking $cracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cracking  $cracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cracking $cracking)
    {
        //
    }
}
