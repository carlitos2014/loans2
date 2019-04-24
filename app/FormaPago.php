<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
     /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "forma_pagos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'dias',
    ];

    public function Credito()
    {
        return $this->hasMany('App\Credito');
    }
}
