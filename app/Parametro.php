<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "parametros";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_sistema', 'base',
    ];
}
