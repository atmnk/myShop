<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Category::all()->jsonSerialize(), Response::HTTP_OK);
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
        $category=new Category();
        $category->name=$name;
        $category->save();
        return response($category->jsonSerialize(), Response::HTTP_OK);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Category $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $catagory)
    {
        //
    }
}
