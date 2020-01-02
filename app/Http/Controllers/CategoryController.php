<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use \App\Category;

class CategoryController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function Category()
    {
        // $Category = new \App\Category;
        
        // $Category->name = "Web Services";

        // if($Category->save()){
        //     return "Success";
        // }
        // return "Error occured while saving";
        
        return view('category');
    }

    public function store(Request $request)
    {
        $category = new Category([
            $category->name = $request->input('name')
        ]);
        $category->save();
        return ("data added");
    }
}
