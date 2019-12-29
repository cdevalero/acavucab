<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'compra';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_compra';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'total', 'fk_compra_proveedor'];

    public $timestamps = false;
}
