<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasacambiarium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasacambiaria';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_tasacambiaria';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['valor', 'fecha'];

    public $timestamps = false;
}
