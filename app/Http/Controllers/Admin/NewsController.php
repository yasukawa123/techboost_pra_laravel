<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // Laravel 08
    public function add()   // addは　Action   
    {
         /*---
         NewsController -> Viewのadmin.news.createに返す 
         admin/newsディレクトリ配下のcreate.blade.php というファイルを呼び出す 
         resources/views/admin/newsディレクトリ配下にcreate.blade.phpファイルを作成する必要がある
         ---*/
        return view('admin.news.create');  
    }
}
