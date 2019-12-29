<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class afiliacion_estatuspago extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'afiliacion_estatuspago';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'aep';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'fk_aep_afiliacionproveedor', 'fk_aep_estatuspago'];
    public $timestamps = false;
    
}
