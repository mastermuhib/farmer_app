<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class RoleModel extends Model
{
    protected $table 	= 'roles';
    protected $guarded = [''];
    public $timestamps = true;
    public $incrementing = true;

}