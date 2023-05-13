<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Stock;
use App\Models\Category;
use App\Models\Finishing;
use App\Models\ProductVideo;
use App\Models\ProductPicture;
use App\Models\ProductCategory;
use App\Models\ProductFinishing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
   use HasFactory;
   public $table = 'products';
   protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
   ];
   protected $fillable = [
        'name',
        'description',
        'price'
   ];

//    public function finishing(){
//         return $this->hasMany(ProductFinishing::class);
//    }
   public function finishing(){
        return $this->belongsToMany(Finishing::class, 'product_finishing');
   }
   public function stock(){
        return $this->belongsToMany(Stock::class, 'product_materials');
   }
   public function video(){
        return $this->hasMany(ProductVideo::class);
   }
   public function picture(){
        return $this->hasMany(ProductPicture::class);
   }
   public function category(){
        return $this->hasMany(ProductCategory::class);
   }
   public function order(){
        return $this->hasMany(Order::class);
   }
   public function kategori(){
        return $this->belongsToMany(Category::class, 'product_categories');
   }
}
