<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_compra extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalle_compra';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_dc';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad', 'precio', 'tipo', 'fk_dc_compra', 'fk_dc_cerveza'];

    public $timestamps = false;
}
