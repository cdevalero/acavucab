<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntoventum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'puntoventa';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_puntoventa';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad', 'fk_puntoventa_puntovalor'];

    public $timestamps = false;
}
