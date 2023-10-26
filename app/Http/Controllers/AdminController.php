<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\menu;
use App\Models\User;
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
        $category = Category::all();
        $menu = menu::all()->sortBy('menu_name');

        return view('admin.menu', ['menu' => $menu, 'category' => $category]);
    }

    public function category()
    {
        return view('admin.category', ['category' => Category::all()]);
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('admin.users', compact('users'));
    }
}
