<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasa_monedaextranjera extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasa_monedaextranjera';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_tm';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_tm_tasacambiaria', 'fk_tm_monedaextranjera'];

    public $timestamps = false;
}
