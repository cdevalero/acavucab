<div class="form-group {{ $errors->has('total_stock') ? 'has-error' : ''}}">
    <label for="total_stock" class="control-label">{{ 'Total Stock' }}</label>
    <input class="form-control" name="total_stock" type="number" id="total_stock" value="{{ isset($almacen->total_stock) ? $almacen->total_stock : ''}}" >
    {!! $errors->first('total_stock', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_almacen_empleado') ? 'has-error' : ''}}">
    <label for="fk_almacen_empleado" class="control-label">{{ 'Fk Almacen Empleado' }}</label>
    <input class="form-control" name="fk_almacen_empleado" type="number" id="fk_almacen_empleado" value="{{ isset($almacen->fk_almacen_empleado) ? $almacen->fk_almacen_empleado : ''}}" >
    {!! $errors->first('fk_almacen_empleado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
