<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="datetime-local" id="fecha" value="{{ isset($compra->fecha) ? $compra->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($compra->total) ? $compra->total : ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_compra_proveedor') ? 'has-error' : ''}}">
    <label for="fk_compra_proveedor" class="control-label">{{ 'Fk Compra Proveedor' }}</label>
    <input class="form-control" name="fk_compra_proveedor" type="number" id="fk_compra_proveedor" value="{{ isset($compra->fk_compra_proveedor) ? $compra->fk_compra_proveedor : ''}}" >
    {!! $errors->first('fk_compra_proveedor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
