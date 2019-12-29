<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasillo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pasillo';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_pasillo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_pasillo', 'letra_pasillo', 'fk_pasillo_almacen'];

    public $timestamps = false;
}
