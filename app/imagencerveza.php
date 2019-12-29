<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagencerveza extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imagencerveza';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_imagencerveza';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_imagencerveza_cerveza', 'imagen'];

    public $timestamps = false;
}
