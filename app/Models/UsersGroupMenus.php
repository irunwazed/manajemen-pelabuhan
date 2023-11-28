<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersGroupMenus extends Model
{
    protected $table = 'tbl_user_groups_menu';
    protected $primaryKey = 'id_ugm';
    public $timestamps = false;

    protected $fillable = [
        "id_groups",
        "id_menu",
        "updated_at"
    ];

}
