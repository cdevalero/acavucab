<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estatus_conex extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estatus_conexe';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ecx';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_hora', 'fk_ecx_venta', 'fk_ecx_compra', 'fk_ecx_estatus'];

    public $timestamps = false;
}
