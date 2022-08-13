<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prescription extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = [
        'dosage',
        'frequency',
        'duration',
        'food_relation',
        'route',
        'instruction',
        'status',
        'patient_id',
        'patient_visit_id',
        'user_id',
        'medicine_id',
        'created_by_id',
        'updated_by_id'
    ];

    public function patient(): HasMany
    {
        return $this->hasMany(Patient::class, 'patient_id', 'id');
    }

    public function medicine(): BelongsTo
    {
        return $this->belongsTo(Medicine::class, 'medicine_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
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
