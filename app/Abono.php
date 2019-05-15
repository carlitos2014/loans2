<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    /**
     * The table is assigned
     *
     * @var array
     */
    protected $table = "abonos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'valor', 'date', 'observacion', 'credito_id',
    ];

    public function Credito()
    {
        return $this->belongsTo('App\Credito');
    }
}
