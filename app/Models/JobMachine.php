<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Machine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobMachine extends Model
{
    use SoftDeletes;
    public $table = 'job_machines';
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];
    protected $fillable = [
        'job_id',
        'mesin_id'
    ];
    public function job(){
        return $this->belongsTo(Job::class);
    }
    public function mesin(){
        return $this->belongsTo(Machine::class);
    }
}
