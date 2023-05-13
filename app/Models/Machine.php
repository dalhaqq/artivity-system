<?php

namespace App\Models;

use App\Models\Category;
use App\Models\JobMachine;
use App\Models\MachineCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Machine extends Model
{
    use SoftDeletes;
    public $table = 'machines';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'machine_categories_id',
        'name',
        'click_count',
        'click_price',
    ];

    public function category(){
        return $this->belongsTo(MachineCategory::class, 'machine_categories_id');
    }
    public function job_mesin(){
        return $this->hasMany(JobMachine::class);
    }
}
