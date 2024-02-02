<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $business_categories = Category::all();
        return view('welcome')->with([
            'business_categories' => $business_categories,
        ]);
    }

    public function category_detail($id)
    {
        $business_category = Category::find($id);
        $businesses = Business::all()->where('id', $business_category->id);
        return view('category_detail')->with([
            'business_category' => $business_category,
            'businesses' => $businesses
        ]);
    }
}
