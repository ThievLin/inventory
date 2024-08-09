<?php

namespace App\Http\Controllers;

use App\Models\UOM;
use App\Models\Addons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uom =UOM::all();
        $Addons = Addons::with('uom')->paginate(8); 
        return view('add-ons', compact('Addons','uom')); 
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
        $validatedData = $request->validate([
            'Addons_name' => 'required|string|max:255',
            'Percentage' => 'nullable|string|max:255',
            'Qty' => 'required|integer',
            'UOM_id' => 'required|integer',

        ]);


        Addons::create($validatedData);

        // Redirect or return response
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function show(Addons $addons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function edit(Addons $addons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Addons_id)
    {
           // Validate the request data
           $validatedData = $request->validate([
            'Addons_name' => 'required|string|max:255',
            'Percentage' => 'required|string|max:255',
            'Qty' => 'required|integer',
            'UOM_id' => 'required|integer',
        ], [
            'Addons_name.required' => 'Please input Supplier Name',
            'Percentage.required' => 'Please input Supplier Contact',
            'Qty.required' => 'Please input Supplier Address',
            'UOM_id.required' => 'Please input Supplier Address',
        ]);
    
        // Find the supplier by ID
        $addons = Addons::find($Addons_id);
 
        // Update the supplier data
        $addons->Addons_name = $validatedData['Addons_name'];
        $addons->Percentage = $validatedData['Percentage'];
        $addons->Qty = $validatedData['Qty'];
        $addons->UOM_id = $validatedData['UOM_id'];
    
        // Save the changes
        $addons->save();
    
        return redirect('/add-ons')->with('flash_message', 'Supplier Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function destroy($Addons_id)
    {
        Addons::destroy($Addons_id);
        return redirect('add-ons')->with('flash_message', 'Addons deleted!');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $suppliers = Addons::where('Addons_name', 'LIKE', "%{$searchTerm}%")->paginate(8); 

        $output = '';
        foreach ($suppliers as $index => $data) {
            $rowClass = ($index % 2 === 0) ? 'bg-zinc-200' : 'bg-zinc-300';
            $borderClass = ($index === 0) ? 'border-t-4' : '';
        
            $output .= '
            <tr class="' . $rowClass . ' text-base ' . $borderClass . ' text-center border-white">
              <td class="py-3 px-4 border border-white">' . ($data->Addons_id ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Addons_name ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Percentage ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Qty ?? 'null' ) . '</td>
              <td class="py-3 px-4 border border-white">' . ( $data->uom->UOM_name ?? 'null') . '</td>
              <td class="py-3 border border-white">
                <button class="relative bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group" onclick="openEditPopup(' . $data->Sup_id . ', \'' . $data->Sup_name . '\', \'' . $data->Sup_contact . '\', \'' . $data->Sup_address . '\')">
                  <i class="fas fa-edit fa-xs"></i>
                  <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Edit</span>
                </button>
                <button class="relative bg-red-500 hover:bg-red-600 active:bg-red-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group" 
                        onclick="if(confirm(\'Are you sure you want to delete?\')) window.location.href=\'add-ons/destroy/' . $data->Addons_id . '\';">
                <i class="fas fa-trash-alt fa-xs"></i>
                <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Delete</span>
                </button>
                <button class="relative bg-green-500 hover:bg-green-600 active:bg-green-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group">
                    <i class="fas fa-toggle-on fa-xs"></i>
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Active</span>
                </button>
              </td>
            </tr>';
        }
        return response()->json(['html' => $output]);
    }
}
