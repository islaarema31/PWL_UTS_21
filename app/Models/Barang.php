<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Barang extends Model
{
    protected $table = "barang";
    public $timestamps = false;
    protected $primaryKey = 'kode_barang';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty',
    ];
}
