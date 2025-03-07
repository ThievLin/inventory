<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Sales;
use App\Models\InHand;
use App\Models\InvView;
use App\Models\Products;
use App\Models\Dashboard;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
        $today = Carbon::today();

        // Sum the price for all records that occurred today
        $totalDailySales = Sales::whereDate('Sale_date', $today)
                                 ->sum('price');
        $topProduct = Sales::select('Product_name_eng', DB::raw('SUM(Qty) as total_qty'))
                                 ->whereDate('Sale_date', $today)
                                 ->groupBy('Product_name_eng')
                                 ->orderBy('total_qty', 'desc')
                                 ->first(); // Fetch only the top product
        $product = Products::all();
        $invView = InvView::all();
        $inhand =InHand::all();
        return view('dashboard', compact('product','totalDailySales','topProduct','invView','inhand'));
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
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
