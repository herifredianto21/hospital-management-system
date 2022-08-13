<?php

namespace App\Models;

use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecord extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    // protected $fillable = ['']
}
