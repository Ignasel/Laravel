<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CatController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only' => ['addCat', 'controlCat', 'showCategories', 'storeCategory', 'deleteCat']]);
    }

    public function addCat(){


        return view ('skelbimai.pages.addCat');

    }

    public function controlCat(){


        return view ('skelbimai.pages.controlCat');

    }

    public function storeCategory(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required'
        ]);

        $category = Category::create([
            'name' => request('name')
        ]);

        return redirect( '/');
}

    public function showCategories()
    {
        $categories = Category::all();
        return view ('skelbimai.pages.controlCat', compact('categories'));

    }


    public function deleteCat(Category $category)
    {
        $category->delete();
        return redirect ('controlCat');

    }



}
