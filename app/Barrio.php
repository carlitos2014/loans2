<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "barrios";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'ciudad_id',
    ];

    public function Ciudad()
    {
        return $this->belongsTo('App\Ciudad');
    }

    public function Cliente()
    {
        return $this->hasMany('App\Cliente');
    }
}
