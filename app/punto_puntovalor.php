<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class punto_puntovalor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'punto_puntovalor';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_pp';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_pp_puntovalor', 'fk_pp_puntocompra'];

    public $timestamps = false;
}
