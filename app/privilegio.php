<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class privilegio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'privilegio';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_privilegio';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];

    public $timestamps = false;
}
