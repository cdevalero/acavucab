<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario_cerveza extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventario_cerveza';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_invcer';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidad', 'fk_invcer_evento', 'fk_invcer_cerveza'];

    public $timestamps = false;
}
