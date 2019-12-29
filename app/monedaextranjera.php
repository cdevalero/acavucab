<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monedaextranjera extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'monedaextranjera';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_monedaextranjera';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo', 'denominacion', 'numero_billete'];

    public $timestamps = false;
}
