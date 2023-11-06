<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class equipmentCategorie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'equipment_categorie_name',  
    ];


    // public function equipments()
    // {
    //     return $this->hasMany(equipments::class, 'equipment_category_name');
    // }

    // public function equipments()
    // {
    //     return $this->hasMany(equipments::class, 'equipment_categorie', 'id');
    // }  


}

