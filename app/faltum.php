<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faltum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'falta';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_falta';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo', 'fecha', 'fk_falta_empleado'];

    public $timestamps = false;
}
