<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personacontacto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personacontacto';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_personacontacto';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido', 'fk_personacontacto_clientejuridico', 'fk_personacontacto_proveedor'];

    public $timestamps = false;
}
