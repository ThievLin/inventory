<?php

namespace App\Http\Controllers;

use App\Models\UOM;
use App\Models\User;
use App\Models\Module;
use App\Models\InvRole;
use App\Models\Invshop;
use App\Models\Setting;
use App\Models\Products;
use App\Models\SysModule;
use Illuminate\Http\Request;
use App\Models\IteamCategory;
use App\Models\invProductCate;
use App\Http\Controllers\Controller;

class SettingController extends Controller
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
        $itemCate = IteamCategory::all();
        $productCate = invProductCate::all();
        $user = User::all();
        $uom = UOM::all();
        $invProduct = Products::paginate(12);
        $shop = Invshop::paginate(2);
        $role = InvRole::all();
        $module = SysModule::all();
        $moduleInf = Module::all();
        return view('setting', compact('itemCate','productCate','user','invProduct','shop','role','module','moduleInf')); 

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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
