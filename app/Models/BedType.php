<?php

namespace App\Models;

use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class BedType extends Model
{
    use HasFactory;
    use updatableAndCreatable;

    protected $fillable = ['code', 
                            'name', 
                            'status',
                            'created_by_id', 
                            'updated_by_id'];
    
    public function createdBy(): BelongsTo
    {   
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }
                                                    
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }

}
