<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MembershipController extends Controller
{
    //

    public function memberships(Request $request)
    {
        $memberships = Membership::all();

        return view('admin.memberships.list', ['memberships' => $memberships]);
    }




    public function add_membership(Request $request)
    {
        return view('admin.memberships.add');
    }




    public function save_membership(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'membership_title' => 'required|unique:memberships,membership_title',
            'membership_months' => 'required',
            'total_amount' => 'required',

        ]);

        // If validation passes, create the application
        Membership::create([
            'membership_title' => $validatedData['membership_title'],
            'membership_months' => $validatedData['membership_months'],
            'total_amount' => $validatedData['total_amount'],
        ]);

        return redirect()->back()->with('success-message', 'Membership added Successfully');
    }


    public function edit_membership(Request $request, $id)
    {
        // dd($id); 
        // $validatedData = $request->validate([
        //     'membership_title' => 'required|unique:memberships,membership_title,' . $id,
        // ]);

        $memberships = Membership::find($id);

        // dd($memberships);  
        if ($memberships) {

            
            return view('admin.memberships.edit', ['memberships' => $memberships]);
        } else {

            return redirect()->back()->with('success-message', 'Membership not found');
        }
    } 



    public function update_membership(Request $request, $id)
    {

        // dd($id); 
        $validatedData = $request->validate([
            'membership_title' => 'required|unique:memberships,membership_title',
            'membership_months' => 'required',
            'total_amount' => 'required',

        ]);

        $membership = Membership::find($id);

        if ($membership) {
            $membership->update($validatedData);
            return redirect()->back()->with('success-message', 'Membership updated successfully');
        } else {
            return redirect()->back()->with('success-message', 'Membership not found');
        }
    }   


    public function delete_membership(Request $request, $id)
    {
        // dd($id);
        $membership = Membership::find($id);

        if ($membership) {

            $membership->delete();
            return redirect()->back()->with('success-message', 'Membership deleted successfully');
        } else {

            return redirect()->back()->with('success-message', 'Membership not found');
        }
    }

    
}
  