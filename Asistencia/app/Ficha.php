<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table = 'ficha';
    protected $primaryKey = 'id_ficha';
    protected $fillable = ['fk_id_control','fk_id_trimestre','fk_id_ambiente','hora_inicio_ficha','hora_fin_ficha'];
}
