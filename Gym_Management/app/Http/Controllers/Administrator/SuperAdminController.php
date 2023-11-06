<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\equipments;
use App\Models\Membership;
use App\Models\SuperAdmin;
use App\Models\Vendor;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SuperAdminController extends Controller
{
    //


    // function for view admin login form 
    public function admin_login_page(Request $request)
    {


        return view('admin.login');
    }



    // function for login 
    public function login(Request $request)
    {


        $count = SuperAdmin::where(function ($query) use ($request) {
            $query->where('admin_username', '=', $request->username)
                ->orWhere('admin_email', '=', $request->username); // Checking for username or email
        })->where('admin_password', '=', $request->password)->count();

        if ($count < 1) {
            return redirect()->back()->with('success-message', [
                'type' => 'danger',
                'message' => 'Invalid username or password.'
            ]);
        } else {
            $user = SuperAdmin::where(function ($query) use ($request) {
                $query->where('admin_username', '=', $request->username)
                    ->orWhere('admin_email', '=', $request->username); // Checking for username or email
            })->where('admin_password', '=', $request->password)->first();

            $request->session()->put('super_admin_id', $user->id);
            $request->session()->put('super_admin_username', $user->admin_username);
            $request->session()->put('super_admin_password', $user->admin_password);
            $request->session()->put('super_admin_email', $user->admin_email);
            return redirect()->route('dashboard');
        }
    }




    // try 

    // public function login(Request $request)
    //     {
    //         $username = $request->input('username');
    //         $password = $request->input('password');

    //         // Check in the SuperAdmin table
    //         $superAdmin = SuperAdmin::where('username', $username)->where('password', $password)->first();
    //         if ($superAdmin) {
    //             return redirect()->route('admin.dashboard');
    //         }

    //         // Check in the Staff table
    //         $staff = Staff::where('username', $username)->where('password', $password)->first();
    //         if ($staff) {
    //             return redirect()->route('staff.dashboard');
    //         }

    //         // Check in the Members table
    //         $member = Member::where('username', $username)->where('password', $password)->first();
    //         if ($member) {
    //             return redirect()->route('member.dashboard');
    //         }

    //         // If no matching user found, redirect back with an error message
    //         return redirect()->back()->with('error', 'Invalid credentials or role');
    //     }
    // try 






















    // function for Dashboard 
    public function dashboard(Request $request)
    {


        $data = array(
            'equipments' => equipments::count(),
            'Vendors' => Vendor::count(),
            'Memberships' => Membership::count(),
        );

        return view('admin.admin_dashboard')->with($data);
    }


    //    function for admin logout 
    public function logout(Request $request)
    {
        $request->session()->forget(['super_admin_id', 'super_admin_username', 'super_admin_email', 'super_admin_password']);
        $request->session()->flush();

        echo '<script> 
      history.pushState(null, null, location.href);
      window.onpopstate = function() {
       history.go(1);
      };  
     </script>';

        return Redirect()->route('/');
    }
}
