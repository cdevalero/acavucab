<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipocerveza extends Model
{
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipocerveza';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_tipocerveza';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'descripcion'];

    
}
