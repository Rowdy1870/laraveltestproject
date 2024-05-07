<?php
// app/Models/Karyawan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Tambahkan ini

class Karyawan extends Model
{
    protected $table = 'karyawan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'jabatan',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'email',
        'no_telepon',
        'tanggal_masuk',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_masuk' => 'date',
    ];

    /**
     * Get the user that owns the karyawan.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
