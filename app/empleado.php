<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleado';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_empleado';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'cedula', 'fk_empleado_tienda', 'fk_empleado_usuario', 'fk_empleado_cargo'];

    public $timestamps = false;
}
