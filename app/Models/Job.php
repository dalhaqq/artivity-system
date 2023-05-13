<?php

namespace App\Models;

use App\Models\Order;
use App\Models\JobStock;
use App\Models\JobStatus;
use App\Models\JobMachine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use SoftDeletes;
    public $table = 'jobs';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'order_id',
        'status_job_id'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function status(){
        return $this->belongsTo(JobStatus::class);
    }
    public function mesin(){
        return $this->hasMany(JobMachine::class);
    }
    public function material(){
        return $this->hasMany(JobStock::class);
    }
}
