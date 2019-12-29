<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'venta';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_venta';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_facturaventa', 'fecha_venta', 'total', 'fk_venta_puntocompra', 'fk_venta_presupuesto', 'fk_venta_empleado'];

    public $timestamps = false;
}
