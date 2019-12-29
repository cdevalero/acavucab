<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cerveza extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cerveza';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_cerveza';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'precio', 'historia', 'caloria', 'volumen', 'fk_cerveza_anaquel', 'fk_cerveza_tipocerveza'];
    public $timestamps = false;
    
}
