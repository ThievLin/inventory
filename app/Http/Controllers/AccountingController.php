<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accounting');
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
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function show(Accounting $accounting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function edit(Accounting $accounting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accounting $accounting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accounting $accounting)
    {
        //
    }
}
