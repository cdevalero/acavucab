<div class="form-group {{ $errors->has('fk_rc_revista') ? 'has-error' : ''}}">
    <label for="fk_rc_revista" class="control-label">{{ 'Fk Rc Revista' }}</label>
    <input class="form-control" name="fk_rc_revista" type="number" id="fk_rc_revista" value="{{ isset($revista_cerveza->fk_rc_revista) ? $revista_cerveza->fk_rc_revista : ''}}" >
    {!! $errors->first('fk_rc_revista', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_rc_cerveza') ? 'has-error' : ''}}">
    <label for="fk_rc_cerveza" class="control-label">{{ 'Fk Rc Cerveza' }}</label>
    <input class="form-control" name="fk_rc_cerveza" type="number" id="fk_rc_cerveza" value="{{ isset($revista_cerveza->fk_rc_cerveza) ? $revista_cerveza->fk_rc_cerveza : ''}}" >
    {!! $errors->first('fk_rc_cerveza', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('porcentaje_descuento') ? 'has-error' : ''}}">
    <label for="porcentaje_descuento" class="control-label">{{ 'Porcentaje Descuento' }}</label>
    <input class="form-control" name="porcentaje_descuento" type="number" id="porcentaje_descuento" value="{{ isset($revista_cerveza->porcentaje_descuento) ? $revista_cerveza->porcentaje_descuento : ''}}" >
    {!! $errors->first('porcentaje_descuento', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
