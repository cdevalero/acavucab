<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estatuspago extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estatuspago';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_estatuspago';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

    public $timestamps = false;
}
