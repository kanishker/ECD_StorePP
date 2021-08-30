<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\products;
use Illuminate\Pagination\Paginator;
use DB;


class ProductController extends Controller
{
    public function AllProducts()
    {
        $products1 = products::paginate(5);
       // dd($products1);
        return view('Shop.home', ['products'=>$products1]);
    }

    public function search(Request $request)
    {
        $products1=products::query()
   ->whereLike('name', $searchTerm)
   ->whereLike('email', $searchTerm)
   ->get();
   return view('Shop.home', ['products'=>$products1]);
    }
    

}
