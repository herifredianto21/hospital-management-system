<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Http\Heri\Traits\updatableAndCreatable;



class Billing extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = ['status', 'doctor_order_id', 'patient_visit_id', 'created_by_id', 'updated_by_id'];


    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_visit_id', 'id');
    }

    public function doctor_order(): BelongsTo
    {
        return $this->belongsTo(DoctorOrder::class, 'doctor_order_id', 'id');
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
