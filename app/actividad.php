<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{   
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actividad';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_actividad';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'tipo', 'fecha_actividad', 'descripcion'];

    
}
