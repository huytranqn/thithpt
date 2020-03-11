<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id','fullname', 'gender', 'namsinh','cmnd','list_subject','isActive'
    ];
}