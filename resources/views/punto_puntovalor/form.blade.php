<div class="form-group {{ $errors->has('fk_pp_puntovalor') ? 'has-error' : ''}}">
    <label for="fk_pp_puntovalor" class="control-label">{{ 'Fk Pp Puntovalor' }}</label>
    <input class="form-control" name="fk_pp_puntovalor" type="number" id="fk_pp_puntovalor" value="{{ isset($punto_puntovalor->fk_pp_puntovalor) ? $punto_puntovalor->fk_pp_puntovalor : ''}}" >
    {!! $errors->first('fk_pp_puntovalor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pp_puntocompra') ? 'has-error' : ''}}">
    <label for="fk_pp_puntocompra" class="control-label">{{ 'Fk Pp Puntocompra' }}</label>
    <input class="form-control" name="fk_pp_puntocompra" type="number" id="fk_pp_puntocompra" value="{{ isset($punto_puntovalor->fk_pp_puntocompra) ? $punto_puntovalor->fk_pp_puntocompra : ''}}" >
    {!! $errors->first('fk_pp_puntocompra', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
