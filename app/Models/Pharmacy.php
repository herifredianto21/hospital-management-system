<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pharmacy extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = [
        'code',
        'name',
        'email',
        'phone',
        'address',
        'status',
        'branch_id',
        'created_by_id',
        'updated_by_id'
    ];

    public function branch(): HasMany
    {
        return $this->hasMany(Branches::class, 'branch_id', 'id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}
