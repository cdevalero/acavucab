<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagotienda extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pagotienda';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'codigo_pagotienda';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monto', 'fk_pagotienda_efectivo', 'fk_pagotienda_tarjetadebito', 'fk_pagotienda_tarjetacredito', 'fk_pagotienda_monedaextranjera', 'fk_pagotienda_cheque', 'fk_pagotienda_puntoventa', 'fk_pagotienda_transferencia', 'fk_pagotienda_venta'];

    public $timestamps = false;
}
