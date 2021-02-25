<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artikel(){
        return $this->hasMany( \App\Artikel::class, 'users_id', 'id');
    }

    public function KategoriArtikel(){
        return $this->hasMany( \App\KategoriArtikel::class, 'users_id', 'id');
    }

    public function berita(){
        return $this->hasMany( \App\Berita::class, 'users_id', 'id');
    }

    public function KategoriBerita(){
        return $this->hasMany( \App\KategoriBerita::class, 'users_id', 'id');
    }

    public function galeri(){
        return $this->hasMany( \App\Galeri::class, 'users_id', 'id');
    }

    public function KategoriGaleri(){
        return $this->hasMany( \App\KategoriGaleri::class, 'users_id', 'id');
    }

    public function pengumuman(){
        return $this->hasMany( \App\Pengumuman::class, 'users_id', 'id');
    }

    public function KategoriPengumuman(){
        return $this->hasMany( \App\KategoriPengumuman::class, 'users_id', 'id');
    }
}

