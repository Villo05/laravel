<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'costs', 'time', 'manager_id'])]

class Projeckt extends Model
{
    /** @use HasFactory<\Database\Factories\ProjecktFactory> */
    use HasFactory;
}
