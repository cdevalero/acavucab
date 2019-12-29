<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transferencium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transferencia';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_transferencia';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_transferencia', 'fk_transferencia_banco'];

    public $timestamps = false;
}
