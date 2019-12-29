<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tienda extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tienda';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_tienda';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rif', 'nombre', 'fk_tienda_lugar', 'fk_tienda_almacen'];

    public $timestamps = false;
}
