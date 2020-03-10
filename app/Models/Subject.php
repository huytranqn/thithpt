<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $dateFormat = 'd-m-Y';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
