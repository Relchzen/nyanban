<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
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

        return view('welcome', ['menu' => $menu, 'category' => $category, 'admin' => $admin]);
    }

    public function show($id)
    {
        $menu = menu::find($id);

        return response()->json($menu);
    }

    public function create()
    {
        $category = Category::all();
        $editing = true;
        return view('admin.menu.detail', compact('category', 'editing'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'menu_name' => 'required|max:50|min:1',
                'price' => 'required|min:1',
                'category' => 'required',
                'picture' => 'image|mimes:jpg,jpeg,png',
            ]
        );

        if ($request->has('picture')) {
            $imagePath = $request->file('picture')->store('images', 'public');
        }

        $menu = new menu();
        $menu->menu_name = $request->menu_name;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->category = $request->category;
        $menu->picture = $imagePath;

        $menu->save();

        return redirect('/admin/menu');
    }
}
