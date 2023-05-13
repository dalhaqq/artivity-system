<?php

namespace App\Models;

use App\Models\ProductFinishing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finishing extends Model
{
    use HasFactory;
   public $table = 'finishing';
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

   public function finishing(){
    return $this->hasMany(ProductFinishing::class);
   }
   public function product(){
    return $this->belongsToMany(Product::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
}
