<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'id';

    protected $fillable = [
        "name",
        "username",
        "password",
        "level"
    ];
}
