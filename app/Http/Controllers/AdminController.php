<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function menu()
    {
        return view('admin.menu', ['menu' => menu::all()]);
    }

    public function category()
    {
        return view('admin.category', ['category' => Category::all()]);
    }

    public function users()
    {
        return view('admin.users');
    }
}
