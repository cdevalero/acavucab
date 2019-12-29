<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="number" id="tipo" value="{{ isset($faltum->tipo) ? $faltum->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($faltum->fecha) ? $faltum->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_falta_empleado') ? 'has-error' : ''}}">
    <label for="fk_falta_empleado" class="control-label">{{ 'Fk Falta Empleado' }}</label>
    <input class="form-control" name="fk_falta_empleado" type="number" id="fk_falta_empleado" value="{{ isset($faltum->fk_falta_empleado) ? $faltum->fk_falta_empleado : ''}}" >
    {!! $errors->first('fk_falta_empleado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
