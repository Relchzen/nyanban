<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $validate = $request->validate(
            [
                'inputCategory' => 'required'
            ]
        );

        $category = Category::create(
            [
                'category' => $request->get('inputCategory'),
            ]
        );

        return redirect('/admin/category');
    }
}
