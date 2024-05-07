<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $primarykey = 'idbarang';

    public $incrementing = 'false';
    public $timestamps = 'true';
}
