<?php

namespace App\Models;

use App\Models\Product;
use App\Models\JobStock;
use App\Models\StockCategory;
use App\Models\ProductMaterial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use SoftDeletes;
    public $table = 'stocks';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'material_categories_id',
        'name',
        'merk',
        'jumlah',
        'price',
        'description',
    ];

    public function category(){
        return $this->belongsTo(StockCategory::class, 'material_categories_id');
    }
    public function job_stock(){
        return $this->hasMany(JobStock::class);
    }
    public function material(){
        return $this->hasMany(ProductMaterial::class);
    }
    public function product(){
        return $this->belongsToMany(Product::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }

}
