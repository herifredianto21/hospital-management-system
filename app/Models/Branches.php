<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Heri\Traits\updatableAndCreatable;


class Branches extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = ['name', 'address', 'phone', 'email', 'website', 'status', 'created_by_id', 'updated_by_id'];

    public function createdBy(): BelongsTo
    {   
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}
