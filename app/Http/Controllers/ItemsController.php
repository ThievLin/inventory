<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Models\IteamCategory;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = IteamCategory::all();
        $items = Items::with('iteamCategory')->paginate(8); 
        return view('items', compact('items','categories')); 
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
            'Item_Khname' => 'required|string|max:255',
            'Item_Engname' => 'nullable|string|max:255',
            'Item_Cate_id' => 'required|integer',
            'Expiry_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('items', 'public');
            $validatedData['image'] = $imagePath;
        }

        Items::create($validatedData);

        // Redirect or return response
        return redirect()->back()->with('success', 'Item added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\Items  $items
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $request->validate([
        'Item_Khname' => 'required|string|max:255',
        'Item_Engname' => 'required|string|max:255',
        'Item_Cate_id' => 'required|integer',
        'Expiry_date' => 'nullable|date',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $item = Items::findOrFail($id);
    $item->Item_Khname = $request->input('Item_Khname');
    $item->Item_Engname = $request->input('Item_Engname');
    $item->Item_Cate_id = $request->input('Item_Cate_id');
    $item->Expiry_date = $request->input('Expiry_date');

    // Handle the image upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('items', $imageName, 'public');
        $item->image = $imagePath;
    }

    $item->save();

    return redirect()->route('items')->with('success', 'Item updated successfully.');
}

    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy($Item_id)
    {
        Items::destroy($Item_id);
        return redirect('items')->with('flash_message', 'items deleted!');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $items = Items::where('Item_Khname', 'LIKE', "%{$searchTerm}%")->get();

        $output = '';
        foreach ($items as $index => $data) {
            $rowClass = ($index % 2 === 0) ? 'bg-zinc-200' : 'bg-zinc-300';
            $borderClass = ($index === 0) ? 'border-t-4' : '';
        
            $output .= '
            <tr class="' . $rowClass . ' text-base ' . $borderClass . ' text-center border-white">
              <td class="py-3 px-4 border border-white">' . ($data->Item_id ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Item_Khname ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Item_Engname ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->iteamCategory->Item_Cate_Khname ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->Expiry_date ?? 'null') . '</td>
              <td class="py-3 px-4 border border-white">' . ($data->image ?? 'null') . '</td>
              <td class="py-3 border border-white">
                <button class="relative bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group editButton">
                  <i class="fas fa-edit fa-xs"></i>
                  <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Edit</span>
                </button>
                <button class="relative bg-red-500 hover:bg-red-600 active:bg-red-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group" onclick="if(confirm(\'Are you sure you want to delete?\')) { window.location.href=\'suppliers/destroy/' . $data->Sup_id . '\'; }">
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
