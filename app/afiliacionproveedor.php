<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class afiliacionproveedor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'afiliacionproveedor';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_afiliacionproveedor';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_afiliacion', 'costo_afiliacion', 'fk_afiliacionproveedor_proveedor'];
    public $timestamps = false;
    
}
