<?php

namespace App\Models\Product;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function getProductCategory($value){
       return DB::table('categories')->where('category_id','=',$value->category_id)->pluck('category_name')->first();
    }
}
