<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    use HasFactory;
    protected $primaryKey = 'nrp';
    public $incrementing = false;

    protected $fillable =[
        'nrp', 'nama', 'alamat'
    ];
}
