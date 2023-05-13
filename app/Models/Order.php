<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use App\Models\Stock;
use App\Models\Product;
use App\Models\Finishing;
use App\Models\OrderStatus;
use App\Models\MetodePembayaran;
use App\Models\ProductFinishing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use SoftDeletes;
    public $table = 'orders';
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];
    protected $fillable = [
        'buyers_id',
        'no_pemesanan',
        'product_id',
        'finishing_id',
        'material_id',
        'file_name',
        'bukti_pembayaran',
        'description',
        'jml_halaman',
        'jml_sisi',
        'jml_copy',
        'order_status_id',
        'price',
        'metode_pembayaran_id'
    ];

    public function buyers(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function finishing(){
        return $this->belongsTo(Finishing::class);
    }
    public function material(){
        return $this->belongsTo(Stock::class);
    }
    public function status(){
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }
    public function payment(){
        return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id');
    }
    public function job(){
        return $this->hasOne(Job::class);
    }
}
