<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class RoleMenuModel extends Model
{

    protected $table 	= 'role_menus';
    protected $guarded = [''];
    public $timestamps = true;
    public $incrementing = true;

}