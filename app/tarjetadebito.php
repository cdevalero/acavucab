<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarjetadebito extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tarjetadebito';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_tarjetadebito';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_tarjetadebito', 'fk_tarjetadebito_banco'];

    public $timestamps = false;
}
