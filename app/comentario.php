<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comentario';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_comentario';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['calificacion', 'descripcion', 'fk_comentario_cerveza', 'fk_comentario_clientejuririco', 'fk_comentario_clientenatural'];

    public $timestamps = false;
}
