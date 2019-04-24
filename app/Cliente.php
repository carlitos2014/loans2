<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "clientes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'name', 'last_name', 'phone', 'address', 'barrio_id',
    ];

    public function Barrio()
    {
        return $this->belongsTo('App\Barrio');
    }

    public function Credito()
    {
        return $this->hasMany('App\Credito');
    }
}
