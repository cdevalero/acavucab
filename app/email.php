<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'email';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_email';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion', 'fk_email_proveedor', 'fk_email_clientejuridico', 'fk_email_clientenatural'];

    public $timestamps = false;
}
