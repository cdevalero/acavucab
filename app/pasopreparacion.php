<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasopreparacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pasopreparacion';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_pasopreparacion';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numeropaso', 'descripcionpaso', 'fk_pasopreparacio_tipocerveza'];

    public $timestamps = false;
}
