<div class="form-group {{ $errors->has('monto') ? 'has-error' : ''}}">
    <label for="monto" class="control-label">{{ 'Monto' }}</label>
    <input class="form-control" name="monto" type="number" id="monto" value="{{ isset($pagotienda->monto) ? $pagotienda->monto : ''}}" >
    {!! $errors->first('monto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_efectivo') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_efectivo" class="control-label">{{ 'Fk Pagotienda Efectivo' }}</label>
    <input class="form-control" name="fk_pagotienda_efectivo" type="number" id="fk_pagotienda_efectivo" value="{{ isset($pagotienda->fk_pagotienda_efectivo) ? $pagotienda->fk_pagotienda_efectivo : ''}}" >
    {!! $errors->first('fk_pagotienda_efectivo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_tarjetadebito') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_tarjetadebito" class="control-label">{{ 'Fk Pagotienda Tarjetadebito' }}</label>
    <input class="form-control" name="fk_pagotienda_tarjetadebito" type="number" id="fk_pagotienda_tarjetadebito" value="{{ isset($pagotienda->fk_pagotienda_tarjetadebito) ? $pagotienda->fk_pagotienda_tarjetadebito : ''}}" >
    {!! $errors->first('fk_pagotienda_tarjetadebito', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_tarjetacredito') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_tarjetacredito" class="control-label">{{ 'Fk Pagotienda Tarjetacredito' }}</label>
    <input class="form-control" name="fk_pagotienda_tarjetacredito" type="number" id="fk_pagotienda_tarjetacredito" value="{{ isset($pagotienda->fk_pagotienda_tarjetacredito) ? $pagotienda->fk_pagotienda_tarjetacredito : ''}}" >
    {!! $errors->first('fk_pagotienda_tarjetacredito', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_monedaextranjera') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_monedaextranjera" class="control-label">{{ 'Fk Pagotienda Monedaextranjera' }}</label>
    <input class="form-control" name="fk_pagotienda_monedaextranjera" type="number" id="fk_pagotienda_monedaextranjera" value="{{ isset($pagotienda->fk_pagotienda_monedaextranjera) ? $pagotienda->fk_pagotienda_monedaextranjera : ''}}" >
    {!! $errors->first('fk_pagotienda_monedaextranjera', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_cheque') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_cheque" class="control-label">{{ 'Fk Pagotienda Cheque' }}</label>
    <input class="form-control" name="fk_pagotienda_cheque" type="number" id="fk_pagotienda_cheque" value="{{ isset($pagotienda->fk_pagotienda_cheque) ? $pagotienda->fk_pagotienda_cheque : ''}}" >
    {!! $errors->first('fk_pagotienda_cheque', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_puntoventa') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_puntoventa" class="control-label">{{ 'Fk Pagotienda Puntoventa' }}</label>
    <input class="form-control" name="fk_pagotienda_puntoventa" type="number" id="fk_pagotienda_puntoventa" value="{{ isset($pagotienda->fk_pagotienda_puntoventa) ? $pagotienda->fk_pagotienda_puntoventa : ''}}" >
    {!! $errors->first('fk_pagotienda_puntoventa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_transferencia') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_transferencia" class="control-label">{{ 'Fk Pagotienda Transferencia' }}</label>
    <input class="form-control" name="fk_pagotienda_transferencia" type="number" id="fk_pagotienda_transferencia" value="{{ isset($pagotienda->fk_pagotienda_transferencia) ? $pagotienda->fk_pagotienda_transferencia : ''}}" >
    {!! $errors->first('fk_pagotienda_transferencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagotienda_venta') ? 'has-error' : ''}}">
    <label for="fk_pagotienda_venta" class="control-label">{{ 'Fk Pagotienda Venta' }}</label>
    <input class="form-control" name="fk_pagotienda_venta" type="number" id="fk_pagotienda_venta" value="{{ isset($pagotienda->fk_pagotienda_venta) ? $pagotienda->fk_pagotienda_venta : ''}}" >
    {!! $errors->first('fk_pagotienda_venta', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
