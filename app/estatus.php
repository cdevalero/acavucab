<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estatus extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estatus';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_estatus';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

    public $timestamps = false;
}
