<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presupuesto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'presupuesto';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_presupuesto';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'total', 'fk_presupuesto_clientejuridico', 'fk_presupuesto_clientenatural'];

    public $timestamps = false;
}
