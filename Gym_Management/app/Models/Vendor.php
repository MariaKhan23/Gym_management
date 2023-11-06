<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'vendor_name',
        'vendor_email',
        'vendor_contact',
        'vendor_address',
        'vendor_company',
    ];


}
