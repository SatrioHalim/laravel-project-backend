<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function apiGetCategory(){
        $categories = Category::with('buku')->get();
        
        return $categories;
    }

    public function apiCreateCategory(Request $request){

        Category::create([
            'name'=> $request->name,
        ]);

        return 'Created Successfully';
    }

    public function apiUpdateCategory(Request $request, $id){

        $category = Category::find($id);

        $category->update([
            'name'=> $request->name,
        ]);

        return 'Updated Successfully';
    }

    public function apiDeleteCategory($id){
        category::destroy($id);
        return 'Delete Successfully';
    }
}
