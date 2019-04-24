<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plazo extends Model
{
    /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "plazos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'num_dias', 'x',
    ];

    public function Credito()
    {
        return $this->hasMany('App\Credito');
    }
}
