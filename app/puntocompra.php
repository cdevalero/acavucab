<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntocompra extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'puntocompra';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_puntocompra';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad'];

    public $timestamps = false;
}
