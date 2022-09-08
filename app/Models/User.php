<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Group;
use App\Models\Hduhau;
use App\Models\Country;
use App\Models\Marital_status;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id',
        'group_id',
        'marital_status_id',
        'hduhau_id',
        'last_name',
        'phone',
        'DOB',
        'occupation',
        'address',
        'state',
        'church',
        'pastor_name',
        'membership_year',
        'status',

    ];

    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
    public function Group()
    {
        return $this->belongsTo(Group::class);
    }
    public function Hduhau()
    {
        return $this->belongsTo(Hduhau::class);
    }
    public function Marital_status()
    {
        return $this->belongsTo(Marital_status::class);
    }

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
}
