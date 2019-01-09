<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function search(Request $request)
    {
        $query=Product::select();
        if($request->has('text')){
          $query=$query->text($request->input('text'));
        }
        if($request->has('sub_category')){
            $query=$query->subCategory($request->input('sub_category'));
        } else if($request->has('category')){
            $query=$query->category($request->input('category'));
        }
        if($request->has('brand')){
            $query=$query->brand($request->input('brand'));
        }
        return response($query->get()->jsonSerialize(), Response::HTTP_OK);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->input('name');
        $desc=$request->input('desc');
        $sc=$request->input('sc');
        $brand=$request->input('brand');
        $product=new Product();
        $product->Name=$name;
        $product->Desc=$desc;
        $product->sub_category_id=$sc;
        $product->brand_id=$brand;
        $product->save();
        return response($product->jsonSerialize(), Response::HTTP_OK);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load(['brand','colors','sizes']);
        return response($product->jsonSerialize(), Response::HTTP_OK);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
