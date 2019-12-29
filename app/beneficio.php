<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'beneficio';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_beneficio';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'monto'];
    public $timestamps = false;
    
}
