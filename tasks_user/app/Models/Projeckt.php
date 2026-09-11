<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeckt extends Model
{
    use HasFactory;

    // Explicitly define the custom table name
    protected $table = 'projeckts';

    protected $fillable = [
        'name',
        'costs',
        'time',
        'manager_id',
    ];
}