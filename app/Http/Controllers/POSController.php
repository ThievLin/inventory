<?php

namespace App\Http\Controllers;

use App\Models\POS;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pos');
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
     * @param  \App\Models\POS  $pOS
     * @return \Illuminate\Http\Response
     */
    public function show(POS $pOS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\POS  $pOS
     * @return \Illuminate\Http\Response
     */
    public function edit(POS $pOS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\POS  $pOS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, POS $pOS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\POS  $pOS
     * @return \Illuminate\Http\Response
     */
    public function destroy(POS $pOS)
    {
        //
    }
}
