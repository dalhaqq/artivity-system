<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use App\Models\Finishing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductFinishing extends Model
{
    use HasFactory;
    public $table = 'product_finishing';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'finishing_id',
        'product_id'
    ];

   public function finishing(){
        return $this->belongsTo(Finishing::class);
    }
   public function product(){
        return $this->belongsTo(Product::class);
    }
}
