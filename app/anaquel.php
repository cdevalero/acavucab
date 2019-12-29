<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anaquel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anaquel';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_anaquel';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_disponible', 'fk_anaquel_pasillo', 'fk_anaquel_empleado'];
    public $timestamps = false;
    
}
