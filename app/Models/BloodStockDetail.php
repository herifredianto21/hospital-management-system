<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BloodStockDetail extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = ['unit', 'total', 'balance', 'blood_stock_id', 'created_by_id', 'updated_by_id'];

    public function blood_stocks(): HasMany
    {   
        return $this->hasMany(User::class, 'blood_stock_id', 'id');
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
