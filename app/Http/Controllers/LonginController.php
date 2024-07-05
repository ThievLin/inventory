<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class LonginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return View ('login');
    }

    public function admin()
    {
        //
        return View ('admin');
    }
    public function dashboard()
    {
        //
        return View ('dashboard');
    }

    public function inventory()
    {
        //
        return View ('inventory');
    }

    public function supplier()
    {
        //
        return View ('supplier');
    }
    public function item()
    {
        //
        return View ('items');
    }
    public function order()
    {
        //
        return View ('orders');
    }

    public function product()
    {
        //
        return View ('product');
    }

    public function addons()
    {
        //
        return View ('addons');
    }
    public function reports()
    {
        //
        return View ('reports');
    }

    public function sidebar()
    {
        //
        return View ('sidebar');
    }
    public function accounting()
    {
        //
        return View ('accounting');
    }
    public function setting()
    {
        //
        return View ('setting');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
