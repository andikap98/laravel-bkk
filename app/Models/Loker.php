<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $table = 'loker';
    protected $fillable = ['nama_perusahaan', 'alamat_perusahaan', 'jenis_pekerjaan', 'persyaratan', 'jobdesk', 'kontak_person', 'kontak_email', 'batas_waktu_pendaftaran', 'status'];
}
