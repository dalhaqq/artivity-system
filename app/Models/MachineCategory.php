<?php

namespace App\Models;

use App\Models\Machine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MachineCategory extends Model
{
    use SoftDeletes;
    public $table = 'machine_categories';
    protected $dates = [
       'updated_at',
       'created_at',
       'deleted_at',
    ];
    protected $fillable = [
        'name',
    ];

    public function machines(){
        return $this->hasMany(Machine::class, 'machine_categories_id', 'id');
    }
}
