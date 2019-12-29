<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagoweb extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pagoweb';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_pagoweb';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monto_total', 'fk_pagoweb_tarjetacredito', 'fk_pagoweb_tarjetadebito'];

    public $timestamps = false;
}
