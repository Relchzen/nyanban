<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{

    public function index()
    {
        $category = Category::all();
        $menu = menu::all();

        return view('welcome', ['menu' => $menu, 'category' => $category]);
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

    public function edit($id)
    {
        $menu = menu::find($id);
        $category = Category::all();

        return view('admin.menu.detail', compact('menu', 'category'));
    }

    public function update($id)
    {
        $menu = menu::find($id);
        $validated = request()->validate(
            [
                'menu_name' => 'required|max:50|min:1',
                'price' => 'required|min:1',
                'category' => 'required',
                'picture' => 'image|mimes:jpg,jpeg,png',
            ]
        );

        if (request()->has('picture')) {
            $imagePath = request()->file('picture')->store('images', 'public');
            $validated['picture'] = $imagePath;

            Storage::disk('public')->delete($menu->picture ?? '');
        }

        $menu->update($validated);

        return redirect()->route('admin.menu');
    }

    public function delete($id)
    {
        $menu = menu::find($id);
        // dump($menu->picture);
        Storage::disk('public')->delete($menu->picture ?? '');

        menu::where('id', $id)->firstOrFail()->delete();

        return redirect()->route('admin.menu');
    }
}
