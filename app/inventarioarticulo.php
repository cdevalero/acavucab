<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventarioarticulo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventarioarticulo';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_inventarioarticulo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'cantidad', 'fk_inventarioarticulo_evento'];

    public $timestamps = false;
}
