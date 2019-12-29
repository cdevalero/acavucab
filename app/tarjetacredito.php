<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarjetacredito extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tarjetacredito';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_tarjetacredito';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_tarjetacredito', 'tipo', 'fk_tarjetacredito_banco'];

    public $timestamps = false;
}
