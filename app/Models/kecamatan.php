<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $kecamatan = 'kecamatan'; 
    protected $primaryKey = 'ID_KECAMATAN';
    protected $fillable =[
        'ID_KECAMATAN','KECAMATAN','CREATED_AT','UPDATED_AT'
    ];
}
