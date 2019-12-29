<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caracteristica extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'caracteristica';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_estilocerveza';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'color', 'grado_alcohol', 'densidad_inicial', 'densidad_final', 'ibus', 'aroma', 'sabor', 'historia', 'fk_caracteristica_tipocerveza'];
    public $timestamps = false;
    
}
