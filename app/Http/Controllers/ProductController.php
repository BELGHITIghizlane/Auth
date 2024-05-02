<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product= Product::all();
        return view('dashboard',['product'=>$product]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=new Product;

        return view('products.create',compact('product'));

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=>'required',
             'quantity'=>'required|numeric',
             'image'=>'required|image',
             'price'=>'required|numeric',

         ]);

         $produit= new Product;


         if($request->hasFile('image')){
           $drf=  $request->file('image')->store('images');

         };
         $produit->name= $request->name ;
         $produit->description= $request->description ;
         $produit->quantity= $request->quantity ;
         $produit->price= $request->price ;
         $produit->image=$drf;

         $produit->save();
         return redirect()->route("products");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
