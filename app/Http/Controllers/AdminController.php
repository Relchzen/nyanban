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
        $admin = false;

        $loggedin = auth()->check();
        if ($loggedin) {
            if (auth()->user()->is_admin) {
                $admin = true;
            }
        }
        $category = Category::all();
        $menu = menu::all();
        return view('admin.menu', ['menu' => $menu, 'category' => $category, 'admin' => $admin]);
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
