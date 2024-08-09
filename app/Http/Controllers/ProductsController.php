<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\invProductCate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proCate = invProductCate::all();
        $products = Products::with('productCategory')->paginate(8); 
        return view('products', compact('products','proCate')); 
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
            'Pro_name_eng' => 'required|string|max:255',
            'Pro_name_kh' => 'nullable|string|max:255',
            'Pro_Cate_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('items', 'public');
            $validatedData['image'] = $imagePath;
        }

        Products::create($validatedData);

        // Redirect or return response
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Pro_id)
    {
        $validatedData = $request->validate([
            'Pro_name_eng' => 'required|string|max:255',
            'Pro_name_kh' => 'required|string|max:255',
            'Pro_Cate_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'Item_Khname.required' => 'Please input Supplier Name',
            'Item_Engname.required' => 'Please input Supplier Contact',
            'Pro_Cate_id.required' => 'Please input Supplier Address',
        ]);
    
        // Find the supplier by ID
        $products = Products::find($Pro_id);
 
    
        // Update the supplier data
        $products->Pro_name_eng = $validatedData['Pro_name_eng'];
        $products->Pro_name_kh = $validatedData['Pro_name_kh'];
        $products->Pro_Cate_id = $validatedData['Pro_Cate_id'];
    // Handle the image upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($products->image) {
            Storage::disk('public')->delete($products->image);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('items', $imageName, 'public');
        $products->image = $imagePath;
    }
        

    
        // Save the changes
        $products->save();
    
        return redirect('/products')->with('flash_message', 'Supplier Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy( $Pro_id)
    {
        Products::destroy($Pro_id);
        return redirect('products')->with('flash_message', 'products deleted!');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $suppliers = Products::where('Pro_name_eng', 'LIKE', "%{$searchTerm}%")->paginate(8); 

        $output = '';
        foreach ($suppliers as $index => $data) {
            $rowClass = ($index % 2 === 0) ? 'bg-zinc-200' : 'bg-zinc-300';
            $borderClass = ($index === 0) ? 'border-t-4' : '';
        
            $output .= '
            <tr class="' . $rowClass . ' text-base ' . $borderClass . ' text-center border-white">
              <td class="py-3 px-4 border border-white">' . ($data->Pro_id ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Pro_name_eng ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Pro_name_kh ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->productCategory->Cate_Khname ?? 'null' ) . '</td>
              <td class="py-3 px-4 border border-white">' . ( $data->image ?? 'null') . '</td>
              <td class="py-3 border border-white">
                <button class="relative bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group" onclick="openEditPopup(' . $data->Sup_id . ', \'' . $data->Sup_name . '\', \'' . $data->Sup_contact . '\', \'' . $data->Sup_address . '\')">
                  <i class="fas fa-edit fa-xs"></i>
                  <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Edit</span>
                </button>
                <button class="relative bg-red-500 hover:bg-red-600 active:bg-red-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group" 
                        onclick="if(confirm(\'Are you sure you want to delete?\')) window.location.href=\'products/destroy/' . $data->Pro_id . '\';">
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
