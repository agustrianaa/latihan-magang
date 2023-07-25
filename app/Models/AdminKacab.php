<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKacab extends Model
{
    use HasFactory;

    protected $filelable = [
        'user_id',
        'nama'
    ];

    public function user(){
        return $this->belongsTo('App\Model\User');
    }
}
