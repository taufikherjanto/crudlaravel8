<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = []; //menggunakan $guarded krn tidak membatasi semua inputan

    //protected $fillable = ['nama', 'jeniskelamin'];

    //protected $dates = ['created_at'];
}
