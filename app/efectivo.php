<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class efectivo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'efectivo';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_efectivo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad'];

    public $timestamps = false;
}
