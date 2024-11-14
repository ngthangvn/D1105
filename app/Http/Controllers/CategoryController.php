<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\str;
class CategoryController extends Controller
{
    function show(){
        $category = Category::paginate(15);
        return view('admin.category.list', compact('category'));
    }
    function add(){
        return view('admin.category.add');
    }
    function store(Request $request){
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->slug),
            'order' => $request->order,
        ]);
        return redirect()->route('category.list')->with('status', "Thêm mới thành công");
    }

    function update(Request $request, $id){
        $category = Category::find($id);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->slug),
            'order' => $request->order,
        ]);

        return redirect()->route('category.list')->with('status', "Cập nhật thành công");
    }
    function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    function delete($id){
        $category = Category::find($id)->delete();
        return redirect()->route('category.list')->with('status', 'xóa thành công');
    }
}
