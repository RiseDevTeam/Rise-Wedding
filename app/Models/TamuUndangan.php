<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuUndangan extends Model
{
    use HasFactory;

    protected $table = 'biodata_tamu_undangan';

    protected $primaryKey = 'id_biodata_tamu_undangan';
    protected $fillable = ['id_biodata_tamu_undangan', 'id_pemesanan', 'nama_tamu', 'whatsapp', 'alamat', 'email'];
    // protected $guarded = [
    //     'id_biodata_tamu_undangan'
    // ];
}
