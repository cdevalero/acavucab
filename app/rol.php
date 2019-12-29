<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rol';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_rol';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

    public $timestamps = false;
}
