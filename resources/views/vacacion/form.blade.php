<div class="form-group {{ $errors->has('fecha_inicio') ? 'has-error' : ''}}">
    <label for="fecha_inicio" class="control-label">{{ 'Fecha Inicio' }}</label>
    <input class="form-control" name="fecha_inicio" type="date" id="fecha_inicio" value="{{ isset($vacacion->fecha_inicio) ? $vacacion->fecha_inicio : ''}}" >
    {!! $errors->first('fecha_inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_fin') ? 'has-error' : ''}}">
    <label for="fecha_fin" class="control-label">{{ 'Fecha Fin' }}</label>
    <input class="form-control" name="fecha_fin" type="date" id="fecha_fin" value="{{ isset($vacacion->fecha_fin) ? $vacacion->fecha_fin : ''}}" >
    {!! $errors->first('fecha_fin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_vacacion_empleado') ? 'has-error' : ''}}">
    <label for="fk_vacacion_empleado" class="control-label">{{ 'Fk Vacacion Empleado' }}</label>
    <input class="form-control" name="fk_vacacion_empleado" type="number" id="fk_vacacion_empleado" value="{{ isset($vacacion->fk_vacacion_empleado) ? $vacacion->fk_vacacion_empleado : ''}}" >
    {!! $errors->first('fk_vacacion_empleado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
