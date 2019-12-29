<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipocerveza_ingrediente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipocerveza_ingrediente';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ti';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad', 'peso', 'tiempo_agregar', 'fk_ti_tipocerveza', 'fk_ti_ingrediente'];

    public $timestamps = false;
}
