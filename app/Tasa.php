<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasa extends Model
{
    /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "tasas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function Credito()
    {
        return $this->hasMany('App\Credito');
    }
}
