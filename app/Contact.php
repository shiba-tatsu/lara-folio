<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        '_token', 'name', 'email', 'body'
    ];
}
