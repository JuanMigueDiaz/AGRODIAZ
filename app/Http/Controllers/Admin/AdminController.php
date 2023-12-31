<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function list()
    {
        $data['header_title'] = 'Admin';
        return view('admin.admin.list', $data);
    }

    public function add()
    {
        $data['header_title'] = 'Add New Admin';
        return view('admin.admin.add', $data);
    }

    public function insert(Request $request)
    {
        $user = new User;
        $user->name  = $request->name;
        $user->email = $request->email; 
        $user->password  = Hash::make($request->password);
        $user->status = $request->status;
        $user->is_admin = 1;

        $user->save();

        return redirect('admin/admin/list')->with('success', "Admin Successfully Created");


    }

}
