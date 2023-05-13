<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVideo extends Model
{
    use SoftDeletes;
   public $table = 'product_video';
   protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
   ];
   protected $fillable = [
        'product_id',
        'video_file'
   ];

   public function finishing(){
        return $this->belongsTo(Product::class);
   }
}
