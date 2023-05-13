<?php

namespace App\Models;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockCategory extends Model
{
    use SoftDeletes;
    public $table = 'material_categories';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'name',
    ];

    public function stock(){
        return $this->hasMany(Stock::class, 'material_categories_id', 'id');
    }
}
