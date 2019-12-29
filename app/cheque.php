<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cheque extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cheque';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_cheque';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_cheque', 'fk_cheque_banco'];
    public $timestamps = false;
    
}
