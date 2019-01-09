<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Color;
use App\Size;
use App\Brand;
use App\SubCategory;
use App\Category;
class Product extends Model
{
    public function colors(){
        return $this->hasMany(Color::class);
    }
    public function sizes(){
        return $this->hasMany(Size::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function subCategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function scopeBrand($query, $value)
    {
        return $query->where('brand_id', $value);
    }
    public function scopeCategory($query, $value)
    {
        return $query->whereIn('sub_category_id', function($query) use ($value){
            $query->select('id')
                ->from(with(new SubCategory())->getTable())
                ->where('category_id', $value);
        });
    }
    public function scopeSubCategory($query, $value)
    {
        return $query->where('sub_category_id', $value);
    }
    public function scopeText($query, $value)
    {
        return $query->where('name','like','%'.$value.'%');
    }
    //
}
