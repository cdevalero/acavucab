<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleventum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalleventa';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_detalleventa';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad', 'precio', 'fk_detalleventa_venta', 'fk_detalleventa_cerveza'];

    public $timestamps = false;
}
