<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'second_last_name',
        'email',
        'password',
        'phone',
        'birth_date',
        'id_roles',
        'profile_picture',
        'gender',
        'active'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_roles');
    }

    // Reservas de clientes/miembros
    public function reservationsAsUser()
    {
        return $this->hasMany(Reservation::class, 'id_users');
    }

    // Reservas de terspeutas
    public function reservationsAsTherapist()
    {
        return $this->hasMany(Reservation::class, 'id_therapists');
    }

    // Ordenes
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_users');
    }
}
