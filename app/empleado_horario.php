<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado_horario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleado_horario';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_eh';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_eh_empleado', 'fk_eh_horario'];

    public $timestamps = false;
}
