<?php

namespace App\Models;

use App\Models\Order;
use App\Models\PrintOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderStatus extends Model
{
    use HasFactory;
    public $table = 'order_statuses';
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];
    protected $fillable = [
            'name'
    ];
    
    public function order(){
        return $this->hasMany(Order::class);
    }

    public function printorder(){
        return $this->hasMany(PrintOrder::class);
    }
}
