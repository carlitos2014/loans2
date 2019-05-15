<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
     /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "creditos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'observacion', 'valor', 'name_fiador', 'lastname_fiador', 'phone_fiador', 'address_fiador', 'plazo_id', 'cliente_id', 'formapago_id', 'tasa_id',
    ];

    public function Cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function FormaPago()
    {
        return $this->belongsTo('App\FormaPago');
    }

    public function Plazo()
    {
        return $this->belongsTo('App\Plazo');
    }

    public function Tasa()
    {
        return $this->belongsTo('App\Tasa');
    }

    public function Abono()
    {
        return $this->hasMany('App\Abono');
    }
}
