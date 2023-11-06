<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\equipmentCategorie;

class equipments extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'equipment_name',
        'equipment_categories',
        'equipment_description',
        'equipment_quantity',
        'equipment_purchase_date',
        'equipment_expire_date',
        'vendor',
        'equipment_piece_cost',
    ];



    // public function equipment_categories(){
    //     return $this->belongsTo(equipmentCategorie::class,'equipment_categories','id');
    // }

    public function val_fun()
    {
        return $this->belongsTo(equipmentCategorie::class, 'equipment_categories', 'id');
    }



    public function ven_name()
    {
        return $this->belongsTo(Vendor::class, 'vendor', 'id');
    }
}
