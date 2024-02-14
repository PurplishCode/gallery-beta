<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $table = "users";
     protected $primaryKey = "userID";


    protected $fillable = [
        'username',
        'email',
        'password',
        'namaLengkap',
        'alamat'
    ];

public function foto()
{
    $this->hasMany(Foto::class, "userID");
}


public function album()
{
    $this->hasMany(Album::class, "userID");
}

public function likeFoto()
{
    $this->hasMany(LikeFoto::class, "userID");
}


public function komentarFoto()
{
    $this->hasMany(KomentarFoto::class, "userID");
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
        'password' => 'hashed',
    ];
}
