<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MenuModel extends Model
{

    protected $table 	= 'menus';
    protected $guarded = [''];
    public $timestamps = true;
    public $incrementing = true;

}