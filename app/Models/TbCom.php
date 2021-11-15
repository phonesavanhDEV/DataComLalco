<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbCom extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_com',
        'type',
        'brand',
        'SNID',
        'NCN',
        'status',
        'Comment',
        
    ];
}
