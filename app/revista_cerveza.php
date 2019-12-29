<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class revista_cerveza extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'revista_cerveza';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_rc';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_rc_revista', 'fk_rc_cerveza', 'porcentaje_descuento'];

    public $timestamps = false;
}
