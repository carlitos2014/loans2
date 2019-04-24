<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
     /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "ciudads";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function Barrio()
    {
        return $this->hasMany('App\Barrio');
    }
}
