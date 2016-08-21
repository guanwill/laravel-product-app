<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ProductController;

use App\Product;
//we're gonna import Product model here

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $products = Product::all();
        // return $products;
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //this is like def edit in rails - a view with a form to create
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validate the request...

        //First way to create a new object
        // $Product = new Product;
        // $Product->name = $request->name;
        // $Product->price = $request->price;
        // $Product->save();
        //
        // return "something";

        //Alternative way to create new object
        $inputs = $request->all();
        $Product = Product::Create($inputs);
        // return redirect()->route('product.index');

        //other way to redirect
        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  //constructing our show view for the individual object
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);  //to pass the variable product to our view
        // return $Product; //by default this returns the object in json format

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //this is to render a view to edit
    {
        $product = Product::find($id);
        // $product = Product::where('id', $id)->first();

        return view('products.edit')->with('product', $product);  //to pass the variable product to our view

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //first method to delete. pass the id to the delete button
        // Product::destroy($id); //grabs the id from the route/url
        // return redirect()->route('product.index');

        $product = Product::find($id)->delete();
        return redirect()->route('product.index');

    }
}
