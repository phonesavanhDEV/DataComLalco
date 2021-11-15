<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbStaff extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_staff',
        'name_staff',
        'surname_staff',
        'sex',
        'position_staff',
        'leader_department',
        'office',
        'tel',

    ];
}
