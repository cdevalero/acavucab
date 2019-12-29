<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_usuario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'clave', 'fk_usuario_rol'];

    public $timestamps = false;
}
