<div class="form-group {{ $errors->has('numero_facturaventa') ? 'has-error' : ''}}">
    <label for="numero_facturaventa" class="control-label">{{ 'Numero Facturaventa' }}</label>
    <input class="form-control" name="numero_facturaventa" type="number" id="numero_facturaventa" value="{{ isset($ventum->numero_facturaventa) ? $ventum->numero_facturaventa : ''}}" >
    {!! $errors->first('numero_facturaventa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_venta') ? 'has-error' : ''}}">
    <label for="fecha_venta" class="control-label">{{ 'Fecha Venta' }}</label>
    <input class="form-control" name="fecha_venta" type="datetime-local" id="fecha_venta" value="{{ isset($ventum->fecha_venta) ? $ventum->fecha_venta : ''}}" >
    {!! $errors->first('fecha_venta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($ventum->total) ? $ventum->total : ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_venta_puntocompra') ? 'has-error' : ''}}">
    <label for="fk_venta_puntocompra" class="control-label">{{ 'Fk Venta Puntocompra' }}</label>
    <input class="form-control" name="fk_venta_puntocompra" type="number" id="fk_venta_puntocompra" value="{{ isset($ventum->fk_venta_puntocompra) ? $ventum->fk_venta_puntocompra : ''}}" >
    {!! $errors->first('fk_venta_puntocompra', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_venta_presupuesto') ? 'has-error' : ''}}">
    <label for="fk_venta_presupuesto" class="control-label">{{ 'Fk Venta Presupuesto' }}</label>
    <input class="form-control" name="fk_venta_presupuesto" type="number" id="fk_venta_presupuesto" value="{{ isset($ventum->fk_venta_presupuesto) ? $ventum->fk_venta_presupuesto : ''}}" >
    {!! $errors->first('fk_venta_presupuesto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_venta_empleado') ? 'has-error' : ''}}">
    <label for="fk_venta_empleado" class="control-label">{{ 'Fk Venta Empleado' }}</label>
    <input class="form-control" name="fk_venta_empleado" type="number" id="fk_venta_empleado" value="{{ isset($ventum->fk_venta_empleado) ? $ventum->fk_venta_empleado : ''}}" >
    {!! $errors->first('fk_venta_empleado', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
