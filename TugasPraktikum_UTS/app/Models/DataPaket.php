<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPaket extends Model
{
    use HasFactory;
    protected $table = "data_Paket";   
    protected $primaryKey = "id";
    protected $fillable = [
        'noResi',
        'pengirim',
        'penerima',
        'asal',
        'tujuan',
        'status',
        'tanggalUpdate',
    ];
}
