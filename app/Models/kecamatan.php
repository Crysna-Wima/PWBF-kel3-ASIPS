<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class kecamatan extends Model
{
    use SoftDeletes;
    protected $kecamatan = 'kecamatan'; 
    protected $primaryKey = 'ID_KECAMATAN';
    protected $fillable =[
        'ID_KECAMATAN','KECAMATAN','CREATED_AT','UPDATED_AT'
    ];
    protected $dates = ['DELETED_AT'];
}
