<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($detalleventum->cantidad) ? $detalleventum->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($detalleventum->precio) ? $detalleventum->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_detalleventa_venta') ? 'has-error' : ''}}">
    <label for="fk_detalleventa_venta" class="control-label">{{ 'Fk Detalleventa Venta' }}</label>
    <input class="form-control" name="fk_detalleventa_venta" type="number" id="fk_detalleventa_venta" value="{{ isset($detalleventum->fk_detalleventa_venta) ? $detalleventum->fk_detalleventa_venta : ''}}" >
    {!! $errors->first('fk_detalleventa_venta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_detalleventa_cerveza') ? 'has-error' : ''}}">
    <label for="fk_detalleventa_cerveza" class="control-label">{{ 'Fk Detalleventa Cerveza' }}</label>
    <input class="form-control" name="fk_detalleventa_cerveza" type="number" id="fk_detalleventa_cerveza" value="{{ isset($detalleventum->fk_detalleventa_cerveza) ? $detalleventum->fk_detalleventa_cerveza : ''}}" >
    {!! $errors->first('fk_detalleventa_cerveza', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
