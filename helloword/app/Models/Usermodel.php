<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    protected $table="acc_tbl";
    protected $fillabe =[
        'name',
    ];
}
