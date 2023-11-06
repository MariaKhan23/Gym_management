<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    //
    public function members(Request $request)
    {
       
        // $get_staff = staff::all();

        // return view('admin.staff.list',['get_staff' => $get_staff]);
        return view('admin.members.list');

    }


    public function add_member(Request $request)
    { 
        return view('admin.members.add');
    }

}
