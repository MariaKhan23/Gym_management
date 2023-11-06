<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //  

    public function staff(Request $request)
    {
       
        $get_staff = staff::all();

        return view('admin.staff.list',['get_staff' => $get_staff]);
    }


    public function add_staff(Request $request)
    {
        return view('admin.staff.add');
    }

    public function save_staff(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'staff_name' => 'required|unique:staff,staff_name',
            'staff_contact' => 'required',
            'staff_email' => 'required',

        ]);

        // If validation passes, create the application
        staff::create([
            'staff_name' => $validatedData['staff_name'],
            'staff_contact' => $validatedData['staff_contact'],
            'staff_email' => $validatedData['staff_email'],
        ]); 

        return redirect()->back()->with('success-message', 'Staff added Successfully');

    }



    public function edit_staff(Request $request, $id){
        // dd($id); 
        $staff = staff::find($id);

        // dd($memberships);  
        if ($staff) {

            
            return view('admin.staff.edit', ['staff' => $staff]);
        } else {

            return redirect()->back()->with('success-message', 'Staff not found');
        } 

    }


    public function update_staff(Request $request,$id){
        // dd($id); 
        $validatedData = $request->validate([
            'staff_name' => 'required|unique:staff,staff_name',
            'staff_contact' => 'required',
            'staff_email' => 'required', 

        ]);

        $staff = staff::find($id);

        if ($staff) {
            $staff->update($validatedData);
            return redirect()->back()->with('success-message', 'Staff updated successfully');
        } else {
            return redirect()->back()->with('success-message', 'Staff not found');
        }
    }



    public function delete_staff(Request $request, $id){
        $staff = staff::find($id);

        if ($staff) {

            $staff->delete();
            return redirect()->back()->with('success-message', 'staff deleted successfully');
        } else {
        
            return redirect()->back()->with('success-message', 'staff not found');
        }
    }


}
