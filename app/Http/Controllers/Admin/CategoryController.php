<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function add() {
        return view('admin.category.add');
    }

    public function insert(Request $request) {
        $category = new Category();
        if($request->hasFile('image')) {
            $file = $request->file('name');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->meta_title = $request->input('meta_title');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();
        return redirect('/dashboard')->with('status', 'Category added Successfully');

    }
}
