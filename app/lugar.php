<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lugar';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_lugar';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'tipo', 'fk_lugar_lugar'];

    public $timestamps = false;
}
