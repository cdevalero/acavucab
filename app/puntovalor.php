<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntovalor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'puntovalor';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_puntovalor';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'valor'];

    public $timestamps = false;
}
