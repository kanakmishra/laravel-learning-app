<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
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
        return view('category');
    }
}
