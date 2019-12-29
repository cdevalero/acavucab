<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'evento';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_evento';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'fecha_inicio', 'fecha_fin', 'fk_evento_lugar'];

    public $timestamps = false;
}
