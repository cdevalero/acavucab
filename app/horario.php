<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'horario';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_horario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hora_entrada', 'hora_salida', 'dia'];

    public $timestamps = false;
}
