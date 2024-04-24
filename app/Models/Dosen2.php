<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen2 extends Model
{
    use HasFactory;

    protected $table = 'dosen2';

    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nip_dsn', 'email_dsn', 'nama_dsn', 'tanggal_lahir_dsn', 'no_hp_dsn','alamat_dsn'];

    public $timestamps = false;
}
