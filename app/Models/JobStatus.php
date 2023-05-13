<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobStatus extends Model
{
    use SoftDeletes;
    public $table = 'job_status';
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];
    protected $fillable = [
        'name'
    ];
    public function order(){
        return $this->hasMany(Job::class);
    }
}
