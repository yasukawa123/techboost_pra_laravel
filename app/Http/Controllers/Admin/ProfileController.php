<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    // Laravel 08 課題応用
    public function add()   // addはaction
    {
        return view('admin.profile.create');  // ProfileController -> Viewのadmin.profile.createに返す
    }

    public function create()
    {
        return redirect('admin/profile/create');    // -> admin/profile/createに転送する
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
