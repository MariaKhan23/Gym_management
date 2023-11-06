<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Class_Schedule extends Model
{
    use HasFactory; 
    use SoftDeletes;

    protected $fillable = [
        'class_name', 
        'trainer',
        'hours',
        'minutes',
        'capacity',
        'from_start',
        'to_end',
        'date',
    ];

 

    

    public function staffer()
    {
        return $this->belongsTo(staff::class, 'trainer', 'id');
    }
    
}
