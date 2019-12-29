<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol_privilegio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rol_privilegio';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_rp';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_rp_rol', 'fk_rp_privilegio'];

    public $timestamps = false;
}
