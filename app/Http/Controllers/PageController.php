<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Item;
use App\Brand;
use App\Order;


class PageController extends Controller
{
    public function mainfun($value='')
     {
          $categories=Category::all();
          $subcategories=Subcategory::all();
          $items=Item::all();
     	return view('frontend.main',compact('categories','subcategories','items'));
     }

     public function brandfun($value='')
     {
          $categories=Category::all();
          $subcategories=Subcategory::all();
          $items=Item::all();
     	return view('frontend.brand',compact('categories','subcategories','items'));
     }

     public function itemdetailfun($value='')
     {
     	return view('frontend.itemdetail');
     }

     public function loginfun($value='')
     {
     	return view('frontend.login',compact('categories','subcategories','items'));
     }

     public function promotionfun($value='')
     {
     	return view('frontend.promotion');
     }

     public function registerfun($value='')
     {
     	return view('frontend.register');
     }

     public function shoppingcartfun($value='')
     {
          $categories=Category::all();
          $subcategories=Subcategory::all();
          $items=Item::all();
     	return view('frontend.shoppingcart',compact('categories','subcategories','items',));
     }

     public function subcategoryfun($value='')
     {
          return view('frontend.subcategory');
     }

     
     
}
