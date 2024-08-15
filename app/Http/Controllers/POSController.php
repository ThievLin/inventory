<?php

namespace App\Http\Controllers;

use App\Models\POS;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\Addons;

class POSController extends Controller
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
        $products = Products::all();
        $addons = Addons::all();
        return view('pos', compact('products','addons'));
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
        // Validate the request
        $validated = $request->validate([
            'product_id' => 'required',
            'product_name' => 'required',
            'addon_id' => 'required',
            'addon_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'currency' => 'required',
            'date' => 'required|date',
        ]);
    
        // Prepare data for API request
        $currency = $request->input('currency') == 'KHR' ? 'Riel(s)' : $request->input('currency');
    
        $apiData = [
            'shop_name' => 'PU01',
            'location_Name' => '2nd Branch',
            'Khmer_name' => '',
            'Eng_name' => $request->input('product_name'),
            'addons' => $request->input('addon_name'),
            'qty' => $request->input('quantity'),
            'price' => $request->input('price') . ' ' . $currency,
            'date' => $request->input('date'),
            'currency' => $currency,
        ];
    
        $response = Http::withoutVerifying()->post('https://api.bsi.com.kh/inventorybsi', $apiData);
    
        if ($response->successful()) {
            return redirect()->route('pos')->with('success', 'Data Successfully Submitted!');
        } else {
            return back()->with('error', 'Failed to submit data.');
        }
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
