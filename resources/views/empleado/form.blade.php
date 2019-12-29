<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($empleado->apellido) ? $empleado->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
    <label for="cedula" class="control-label">{{ 'Cedula' }}</label>
    <input class="form-control" name="cedula" type="number" id="cedula" value="{{ isset($empleado->cedula) ? $empleado->cedula : ''}}" >
    {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_empleado_tienda') ? 'has-error' : ''}}">
    <label for="fk_empleado_tienda" class="control-label">{{ 'Fk Empleado Tienda' }}</label>
    <input class="form-control" name="fk_empleado_tienda" type="number" id="fk_empleado_tienda" value="{{ isset($empleado->fk_empleado_tienda) ? $empleado->fk_empleado_tienda : ''}}" >
    {!! $errors->first('fk_empleado_tienda', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_empleado_usuario') ? 'has-error' : ''}}">
    <label for="fk_empleado_usuario" class="control-label">{{ 'Fk Empleado Usuario' }}</label>
    <input class="form-control" name="fk_empleado_usuario" type="number" id="fk_empleado_usuario" value="{{ isset($empleado->fk_empleado_usuario) ? $empleado->fk_empleado_usuario : ''}}" >
    {!! $errors->first('fk_empleado_usuario', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_empleado_cargo') ? 'has-error' : ''}}">
    <label for="fk_empleado_cargo" class="control-label">{{ 'Fk Empleado Cargo' }}</label>
    <input class="form-control" name="fk_empleado_cargo" type="number" id="fk_empleado_cargo" value="{{ isset($empleado->fk_empleado_cargo) ? $empleado->fk_empleado_cargo : ''}}" >
    {!! $errors->first('fk_empleado_cargo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
