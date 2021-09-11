<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // Laravel 08
    public function add()
    {
        return view('admin.news.create');   // NewsController -> Viewのadmin.news.createに返す
    }
}
