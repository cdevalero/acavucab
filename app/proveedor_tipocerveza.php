<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor_tipocerveza extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proveedor_tipocerveza';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_ptc';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_ptc_proveedor', 'fk_ptc_tipocerveza'];

    public $timestamps = false;
}
