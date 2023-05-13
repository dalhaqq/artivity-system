<?php

namespace App\Models;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
   public $table = 'categories';
   protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
   ];
   protected $fillable = [
        'category',
   ];

   public function product_category(){
    return $this->hasMany(ProductCategory::class);
   }
   public function product(){
    return $this->belongsToManyz(Product::class);
    }
}
