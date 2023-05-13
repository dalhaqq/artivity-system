<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductMaterial extends Model
{
    use HasFactory;
    public $table = 'product_materials';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'stock_id',
        'product_id'
    ];

   public function stock(){
        return $this->belongsTo(Stock::class);
    }
   public function product(){
        return $this->belongsTo(Product::class);
    }
}
