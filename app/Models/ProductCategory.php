<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    public $table = 'product_categories';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'product_id',
        'category_id'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
