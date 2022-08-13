<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SampleCollection extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = [
        'sample_code',
        'collect_date',
        'dispatch_date',
        'cancel_dispatch_date',
        'status',
        'user_id',
        'investigation_id',
        'laboratory_id',
        'created_by_id',
        'updated_by_id'
    ];

    public function investigation(): BelongsTo
    {
        return $this->belongsTo(Investigation::class, 'investigation_id', 'id');
    }

    public function laboratory(): BelongsTo
    {
        return $this->belongsTo(Laboratory::class, 'laboratory_id', 'id');
    }

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approve_by_id', 'id');
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
