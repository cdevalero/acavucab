<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class almacen extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'almacen';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_almacen';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total_stock', 'fk_almacen_empleado'];
    public $timestamps = false;
    
}
