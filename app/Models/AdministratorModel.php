<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class AdministratorModel extends Authenticatable
{
    use Notifiable;
    protected $table    = 'administrators';
    protected $guarded = [''];
    use SoftDeletes;
    public $timestamps = true;
    public $incrementing = false;
    protected $keyType = 'uuid';

}