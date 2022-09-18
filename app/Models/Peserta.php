<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Peserta as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Peserta extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'peserta_name',
        'email',
    ];

    public function age(){
        return $this->belongsTo('Age');
    }

    public function address(){
        return $this->belongsTo('Address');
    }

    public function phonenumber(){
        return $this->belongsTo('Nomor HP');
    }

    public function jenis_anggota(){
        return $this->belongsTo('Jenis Anggota');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTCustomClaims(): array {
        return[];
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }
}
