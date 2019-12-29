<div class="form-group {{ $errors->has('fk_rp_rol') ? 'has-error' : ''}}">
    <label for="fk_rp_rol" class="control-label">{{ 'Fk Rp Rol' }}</label>
    <input class="form-control" name="fk_rp_rol" type="number" id="fk_rp_rol" value="{{ isset($rol_privilegio->fk_rp_rol) ? $rol_privilegio->fk_rp_rol : ''}}" >
    {!! $errors->first('fk_rp_rol', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_rp_privilegio') ? 'has-error' : ''}}">
    <label for="fk_rp_privilegio" class="control-label">{{ 'Fk Rp Privilegio' }}</label>
    <input class="form-control" name="fk_rp_privilegio" type="number" id="fk_rp_privilegio" value="{{ isset($rol_privilegio->fk_rp_privilegio) ? $rol_privilegio->fk_rp_privilegio : ''}}" >
    {!! $errors->first('fk_rp_privilegio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
