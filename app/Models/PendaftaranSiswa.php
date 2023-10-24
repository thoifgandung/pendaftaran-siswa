<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'asal_sekolah',
        'agama_id',
        'nilai_indo',
        'nilai_ipa',
        'nilai_mtk',
    ];
}
