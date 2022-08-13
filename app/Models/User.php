<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Heri\Traits\updatableAndCreatable;
use Illuminate\Support\Str;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

// use App\Http\Heri\Traits\updatableAndCreatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use updatableAndCreatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'name',
        'username',
        'email',
        'email_verified_at',
        'password',
        'gender',
        'dob',
        'age',
        'religion',
        'address_1',
        'address_2',
        'image',
        'status',
        'created_by_id',
        'updated_by_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }
    
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }

    protected function name(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucfirst($value),
            set: fn($value) => Str::lower($value)
        );
    }

    protected function created_at(): Attribute
    {
        return new Attribute(
            get: fn($value) => Carbon::parse($value)->toDateTimeString(),
            set: fn($value) => date('Y-m-d', strtotime($value))
        );
    }

    public static function search ($search)
    {
        return empty($search) ? static::query()
        : static::where('id', 'like', '%' .$search. '%')
        ->orWhere('name', 'like', '%' .$search. '%')
        ->orWhere('email', 'like', '%' .$search. '%');
    }
}
