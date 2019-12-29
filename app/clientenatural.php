<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientenatural extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientenatural';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_clientenatural';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rif', 'nombre', 'apellido', 'cedula', 'numero_carnet', 'fk_clientenatural_lugar', 'fk_clientenatural_usuario'];

    public $timestamps = false;
}
