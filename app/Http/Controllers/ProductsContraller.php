<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsContraller extends Controller
{
    public function index(){
        $products=Products::all();
        return view('Products.index',['Products'=>$products]);
    }
    public function create(){
        return view('Products.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'Name'=>'required',
            'Qty'=>'required',
            'price'=>'required',
        ]);

        Products::create($data);

        return redirect('Products');
    }

    public function delete(Products $id){
        $id->delete();
        return redirect('/Products');
    }

    public function edite(Products $product){
        return view('Products.edite',['Products'=>$product]);
    }

    public function update(Products $product ,Request $request){
        $data=$request->validate([
            'Name'=>'required',
            'Qty'=>'required',
            'price'=>'required',
        ]);

        $product->update($data);

        return redirect('Products');

    }
}