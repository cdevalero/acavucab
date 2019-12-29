<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento_proveedor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'evento_proveedor';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ep';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_ep_evento', 'fk_ep_proveedor', 'fk_ep_actividad'];

    public $timestamps = false;
}
