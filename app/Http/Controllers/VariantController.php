<?php

namespace App\Http\Controllers;

use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class VariantController extends Controller
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

    public function search($product,$size,$color)
    {
        $query=Variant::havingProduct($product);
        $query=$query->havingSize($size);
        $query=$query->havingColor($color);
        return response($query->first()->jsonSerialize(), Response::HTTP_OK);
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
        $product=$request->input('product');
        $color=$request->input('color');
        $size=$request->input('size');
        $price=$request->input('price');
        $variant=new Variant();

        $variant->product_id=$product;
        $variant->color_id=$color;
        $variant->size_id=$size;
        $variant->price=$price;
        $variant->save();
        return response($variant->jsonSerialize(), Response::HTTP_OK);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function show(Variant $variant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function edit(Variant $variant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variant $variant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variant $variant)
    {
        //
    }
}
