<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;

use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){

        $data = [];
        $data['categories'] = Category::get();
        $data['subcategories'] = SubCategory::get();
        $data['products'] = Product::get();


        return view('frontend.layouts.home',compact('data'));
    }
}
