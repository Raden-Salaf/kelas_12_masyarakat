<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';
    protected $primarykey = 'id_tanggapan';

    protected $fillable = [
        'id_pengaduan',
        'id_tanggapan',
        'pengaduan',
        'id_petugas',
    ];
}