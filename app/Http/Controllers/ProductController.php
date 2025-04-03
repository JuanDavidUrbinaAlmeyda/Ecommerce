<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $listProducts=Products::paginate(12);
        return view('products.index',[
            'list'=>$listProducts
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function detail($id)
    {
        $product=Products::find($id);
        return view('products.product',[
            'product'=>$product
        ]);
    }
}
