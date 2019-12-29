<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vacacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vacacion';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_vacacion';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'fk_vacacion_empleado'];

    public $timestamps = false;
}
