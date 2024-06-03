<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrintOrder extends Model
{
    use HasFactory;
    public $table = 'print_orders';
    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $guarded = [
        'id'
    ];

    public function buyers(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }
}
