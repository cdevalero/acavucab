<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class revistum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'revista';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_revista';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_publicacion'];

    public $timestamps = false;
}
