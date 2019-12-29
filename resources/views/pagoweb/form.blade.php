<div class="form-group {{ $errors->has('monto_total') ? 'has-error' : ''}}">
    <label for="monto_total" class="control-label">{{ 'Monto Total' }}</label>
    <input class="form-control" name="monto_total" type="number" id="monto_total" value="{{ isset($pagoweb->monto_total) ? $pagoweb->monto_total : ''}}" >
    {!! $errors->first('monto_total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagoweb_tarjetacredito') ? 'has-error' : ''}}">
    <label for="fk_pagoweb_tarjetacredito" class="control-label">{{ 'Fk Pagoweb Tarjetacredito' }}</label>
    <input class="form-control" name="fk_pagoweb_tarjetacredito" type="number" id="fk_pagoweb_tarjetacredito" value="{{ isset($pagoweb->fk_pagoweb_tarjetacredito) ? $pagoweb->fk_pagoweb_tarjetacredito : ''}}" >
    {!! $errors->first('fk_pagoweb_tarjetacredito', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pagoweb_tarjetadebito') ? 'has-error' : ''}}">
    <label for="fk_pagoweb_tarjetadebito" class="control-label">{{ 'Fk Pagoweb Tarjetadebito' }}</label>
    <input class="form-control" name="fk_pagoweb_tarjetadebito" type="number" id="fk_pagoweb_tarjetadebito" value="{{ isset($pagoweb->fk_pagoweb_tarjetadebito) ? $pagoweb->fk_pagoweb_tarjetadebito : ''}}" >
    {!! $errors->first('fk_pagoweb_tarjetadebito', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
