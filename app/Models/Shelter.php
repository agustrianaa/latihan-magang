<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
