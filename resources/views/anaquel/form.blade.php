<div class="form-group {{ $errors->has('producto_disponible') ? 'has-error' : ''}}">
    <label for="producto_disponible" class="control-label">{{ 'Producto Disponible' }}</label>
    <input class="form-control" name="producto_disponible" type="number" id="producto_disponible" value="{{ isset($anaquel->producto_disponible) ? $anaquel->producto_disponible : ''}}" >
    {!! $errors->first('producto_disponible', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_anaquel_pasillo') ? 'has-error' : ''}}">
    <label for="fk_anaquel_pasillo" class="control-label">{{ 'Fk Anaquel Pasillo' }}</label>
    <input class="form-control" name="fk_anaquel_pasillo" type="number" id="fk_anaquel_pasillo" value="{{ isset($anaquel->fk_anaquel_pasillo) ? $anaquel->fk_anaquel_pasillo : ''}}" >
    {!! $errors->first('fk_anaquel_pasillo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_anaquel_empleado') ? 'has-error' : ''}}">
    <label for="fk_anaquel_empleado" class="control-label">{{ 'Fk Anaquel Empleado' }}</label>
    <input class="form-control" name="fk_anaquel_empleado" type="number" id="fk_anaquel_empleado" value="{{ isset($anaquel->fk_anaquel_empleado) ? $anaquel->fk_anaquel_empleado : ''}}" >
    {!! $errors->first('fk_anaquel_empleado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
