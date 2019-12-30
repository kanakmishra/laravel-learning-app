<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
class SubcategoryController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function SubCategory()
    {
        return view('sub-category');
    }
}
