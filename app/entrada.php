<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entrada extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entrada';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_entrada';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'tipo', 'fk_entrada_evento', 'estatus'];

    public $timestamps = false;
}
