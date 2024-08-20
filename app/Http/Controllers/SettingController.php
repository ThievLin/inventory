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
use App\Models\InvLocation;
use Illuminate\Http\Request;
use App\Models\IteamCategory;
use App\Models\invProductCate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $shop_se =Invshop::all();
        $role = InvRole::all();
        $module = SysModule::all();
        $moduleInf = Module::all();
        $location = InvLocation::all();
        return view('setting', compact('itemCate','productCate','user','invProduct','shop','role','module','moduleInf','uom','shop_se','location')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = Auth::user()->invShop->O_id;
        // Validate the input data
        $validatedData = $request->validate([
            'S_name' => ['required', 'string', 'max:255'],
            'S_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload if a logo is provided
        $logoPath = null;
        if ($request->hasFile('S_logo') && $request->file('S_logo')->isValid()) {
            $logo = $request->file('S_logo');
            $logoPath = $logo->store('logos', 'public'); // Store under 'public/storage/logos'
        }
        // Create the shop record in the database
      
        Invshop::create([
            'S_name' => $validatedData['S_name'],
            'O_id' => $shop, // Assuming this is intentionally left empty
            'S_logo' => $logoPath,
        ]);
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Shop created successfully!');
    }
    public function location(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'L_address' => ['required', 'string', 'max:255'],
            'S_id' => 'required|integer',
        ]);
    
        // Create the location record in the database
        InvLocation::create([
            'L_address' => $validatedData['L_address'],
            'L_name' => '', // Assuming this is optional or default
            'L_contact' => '', // Assuming this is optional or default
            'S_id' => $validatedData['S_id'], // Removed extra '$'
        ]);
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Location created successfully!');
    }
    public function user(Request $request) {
        // Validate the request data
        $data = $request->validate([
            'U_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'sys_name' => ['required', 'string', 'max:255'],
            'U_contact' => ['required', 'string', 'max:255'],
            'R_id' =>'required|integer',
            'S_id' => 'required|integer',
            'L_id' => 'required|integer',
            'U_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // Debug the validated data
        dd($data);
    
        // Handle the file upload
        $photoPath = null;
        if (isset($data['U_photo']) && $data['U_photo']->isValid()) {
            $photo = $data['U_photo'];
            $photoPath = $photo->store('user_photos', 'public');
        }
    
        // Create the user
        User::create([
            'U_name' => $data['U_name'],
            'R_id' => $data['R_id'],
            'U_contact' => $data['U_contact'],
            'sys_name' => $data['sys_name'],
            'password' => Hash::make($data['password']),
            'S_id' => $data['S_id'],
            'L_id' => $data['L_id'],
            'U_photo' => $photoPath,
            'status' => '', // This field seems to be required but isn't being set. Verify if needed.
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'User created successfully!');
    }
    public function category(Request $request){
        // Validate the input data
        $validatedData = $request->validate([
            'Item_Cate_Khname' => ['required', 'string', 'max:255'],
            'Item_Cate_Engname' => ['nullable', 'string', 'max:255'], // Add validation rule for English name
        ]);
    
        // Create the item category record in the database
        IteamCategory::create([
            'Item_Cate_Khname' => $validatedData['Item_Cate_Khname'],
            'Item_Cate_Engname' => $request->input('Item_Cate_Engname'), // Use request input directly
            'item_Cate_type' => '',
            'status' => 'Active',
        ]);
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Category created successfully!');
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
