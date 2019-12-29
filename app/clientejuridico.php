<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientejuridico extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientejuridico';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_clientejuridico';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rif', 'denominacion_comercial', 'razon_social', 'numero_carnet', 'capital_disponible', 'fk_clientejuridicofisico_lugar', 'fk_clientejuridicofiscal_lugar', 'fk_clientejuridico_usuario'];

    public $timestamps = false;
}
