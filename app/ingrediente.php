<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ingrediente';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_ingrediente';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'tipo'];

    public $timestamps = false;
}
