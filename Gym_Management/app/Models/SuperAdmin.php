<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuperAdmin extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'admin_username',
        'admin_email',
        'admin_password',
    ];
}
