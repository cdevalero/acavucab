<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banco extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banco';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_banco';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'codigocuenta', 'codigocheque'];
    public $timestamps = false;
    
}
