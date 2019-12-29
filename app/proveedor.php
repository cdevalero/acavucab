<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proveedor';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_proveedor';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['razon_social', 'denominacion_comercial', 'rif', 'web', 'fk_proveedorfisico_lugar', 'fk_proveedorfiscal_lugar'];

    public $timestamps = false;
}
