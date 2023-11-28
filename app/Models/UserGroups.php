<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    protected $table = 'tbl_user_groups';
    protected $primaryKey = 'id_user_groups';

    protected $fillable = [
        "nama_groups",
        "STATUS",
        "created_by"
    ];

}
