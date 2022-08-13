<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BillingTransaction extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = ['payment_amount', 'payment_amount', 'status', 'patient_visit_id', 'billing_id', 'created_by_id', 'updated_by_id'];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class, 'patient_visit_id', 'id');
    }

    public function billings(): HasMany
    {
        return $this->hasMany(Billing::class, 'billing_id', 'id');
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
