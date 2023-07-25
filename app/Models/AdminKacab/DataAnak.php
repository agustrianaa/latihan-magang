<?php

namespace App\Models\AdminKacab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    use HasFactory;

    protected $filelable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin'];
}
