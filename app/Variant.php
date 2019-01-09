<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Size;
use App\Color;
class Variant extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function scopeHavingProduct($query, $value)
    {
        return $query->where('product_id', $value);
    }
    public function scopeHavingColor($query, $value)
    {
        return $query->where('color_id', $value);
    }
    public function scopeHavingSize($query, $value)
    {
        return $query->where('size_id', $value);
    }
    //
}
