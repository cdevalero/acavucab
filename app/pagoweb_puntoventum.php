<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagoweb_puntoventum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pagoweb_puntoventa';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_pwpv';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_pwpv_pagoweb', 'fk_pwpv_puntoventa'];

    public $timestamps = false;
}
