<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(SubCategory::all()->jsonSerialize(), Response::HTTP_OK);
        //
    }
    public function forCategory($id)
    {
        return response(SubCategory::where(['category_id'=>$id])->get()->jsonSerialize(), Response::HTTP_OK);
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
        $category=$request->input('category');

        $sub_category=new SubCategory();
        $sub_category->name=$name;
        Category::findOrFail($category)->subCategories()->save($sub_category);
        return response($sub_category->jsonSerialize(), Response::HTTP_OK);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCatagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCatagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCatagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCatagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCatagory)
    {
        //
    }
}
