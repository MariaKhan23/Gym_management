<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    //

// function for show vendors lists 

public function vendors(Request $request){
    return view('admin.vendors.list');

}


public function add_vendor(Request $request){

    return view('admin.vendors.add');

}



// function for save vendor 
public function save_vendor(Request $request){
    // dd($request);
    $validatedData = $request->validate([
        'vendor_name' => 'required|unique:vendors,vendor_name',
        'vendor_email' => 'required',
        'vendor_contact' => 'required',
        'vendor_address' => 'required',
        'vendor_company' => 'required',
    ]);

    // If validation passes, create the application
    Vendor::create([
        'vendor_name' => $validatedData['vendor_name'],
        'vendor_email' => $validatedData['vendor_email'],
        'vendor_contact' => $validatedData['vendor_contact'],
        'vendor_address' => $validatedData['vendor_address'],
        'vendor_company' => $validatedData['vendor_company'],
    ]); 

return redirect()->back()->with('success-message', 'Vendor added Successfully..!');


}

}
