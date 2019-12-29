<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'telefono';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_telefono';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero', 'cod_area', 'fk_telefono_proveedor', 'fk_telefono_clientenatural', 'fk_telefono_clientejuridico'];

    public $timestamps = false;
}
