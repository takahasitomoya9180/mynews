<?php

//prfilecontroller.php作成時のコードです
//php artisan make:controller Admin/ProfileController
namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create()
    {
        return view('admin/profile/create');
    }
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update()
    {
        return view('admin/profile/edit');
    }
}
