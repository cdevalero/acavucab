<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado_beneficio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleado_beneficio';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_empben';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_empben_empleado', 'fk_empben_beneficio'];

    public $timestamps = false;
}
