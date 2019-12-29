<div class="form-group {{ $errors->has('fk_eh_empleado') ? 'has-error' : ''}}">
    <label for="fk_eh_empleado" class="control-label">{{ 'Fk Eh Empleado' }}</label>
    <input class="form-control" name="fk_eh_empleado" type="number" id="fk_eh_empleado" value="{{ isset($empleado_horario->fk_eh_empleado) ? $empleado_horario->fk_eh_empleado : ''}}" >
    {!! $errors->first('fk_eh_empleado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_eh_horario') ? 'has-error' : ''}}">
    <label for="fk_eh_horario" class="control-label">{{ 'Fk Eh Horario' }}</label>
    <input class="form-control" name="fk_eh_horario" type="number" id="fk_eh_horario" value="{{ isset($empleado_horario->fk_eh_horario) ? $empleado_horario->fk_eh_horario : ''}}" >
    {!! $errors->first('fk_eh_horario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
