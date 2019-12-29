<div class="form-group {{ $errors->has('fk_empben_empleado') ? 'has-error' : ''}}">
    <label for="fk_empben_empleado" class="control-label">{{ 'Fk Empben Empleado' }}</label>
    <input class="form-control" name="fk_empben_empleado" type="number" id="fk_empben_empleado" value="{{ isset($empleado_beneficio->fk_empben_empleado) ? $empleado_beneficio->fk_empben_empleado : ''}}" >
    {!! $errors->first('fk_empben_empleado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_empben_beneficio') ? 'has-error' : ''}}">
    <label for="fk_empben_beneficio" class="control-label">{{ 'Fk Empben Beneficio' }}</label>
    <input class="form-control" name="fk_empben_beneficio" type="number" id="fk_empben_beneficio" value="{{ isset($empleado_beneficio->fk_empben_beneficio) ? $empleado_beneficio->fk_empben_beneficio : ''}}" >
    {!! $errors->first('fk_empben_beneficio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
