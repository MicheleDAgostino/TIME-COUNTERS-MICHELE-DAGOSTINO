<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function store(){
        
        $products = Product::all();

        return view('products/create', compact('products'));
    }

    public function create(ProductRequest $request){


        $product = Product::create(
            [
                'img' => $request->has('img') ? $request->file('img')->store('public') : '/media/rolex.jpg',
                'nameProduct' => $request->input('nameProduct'),
                'brand' => $request->input('brand'),
                'description' => $request->input('description'),
            ]
        );

        return redirect()->route('product.store')->with('message', 'PRODOTTO INSERITO CON SUCCESSO');

    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    public function update(Product $product){
        return view('products.update', compact('product'));
    }

    public function edit(Request $request, Product $product){

        $product->nameProduct = $request->nameProduct;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->img = $request->has('img') ? $request->file('img')->store('public') : $prduct->img;

        $product->save();
        return redirect(route('products.show', compact('product')));
    }

    public function delete(Product $product){
        $product->delete();
        return redirect()->route('homepage')->with('message', 'PRODOTTO ELIMINATO CON SUCCESSO');
    }

}
