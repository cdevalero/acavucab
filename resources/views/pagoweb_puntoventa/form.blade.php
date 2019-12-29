<div class="form-group {{ $errors->has('fk_pwpv_pagoweb') ? 'has-error' : ''}}">
    <label for="fk_pwpv_pagoweb" class="control-label">{{ 'Fk Pwpv Pagoweb' }}</label>
    <input class="form-control" name="fk_pwpv_pagoweb" type="number" id="fk_pwpv_pagoweb" value="{{ isset($pagoweb_puntoventum->fk_pwpv_pagoweb) ? $pagoweb_puntoventum->fk_pwpv_pagoweb : ''}}" >
    {!! $errors->first('fk_pwpv_pagoweb', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pwpv_puntoventa') ? 'has-error' : ''}}">
    <label for="fk_pwpv_puntoventa" class="control-label">{{ 'Fk Pwpv Puntoventa' }}</label>
    <input class="form-control" name="fk_pwpv_puntoventa" type="number" id="fk_pwpv_puntoventa" value="{{ isset($pagoweb_puntoventum->fk_pwpv_puntoventa) ? $pagoweb_puntoventum->fk_pwpv_puntoventa : ''}}" >
    {!! $errors->first('fk_pwpv_puntoventa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
