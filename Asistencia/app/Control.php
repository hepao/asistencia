<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table = 'control';
    protected $primaryKey = 'id_control';
    protected $fillable = ['fecha_registro'];
}
