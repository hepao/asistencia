<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    protected $table = 'trimestre';
    protected $primaryKey = 'id_trimestre';
    protected $fillable = ['fk_id_jornada','numero_trimestre'];
}
