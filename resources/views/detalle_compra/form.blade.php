<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($detalle_compra->cantidad) ? $detalle_compra->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($detalle_compra->precio) ? $detalle_compra->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="number" id="tipo" value="{{ isset($detalle_compra->tipo) ? $detalle_compra->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_dc_compra') ? 'has-error' : ''}}">
    <label for="fk_dc_compra" class="control-label">{{ 'Fk Dc Compra' }}</label>
    <input class="form-control" name="fk_dc_compra" type="number" id="fk_dc_compra" value="{{ isset($detalle_compra->fk_dc_compra) ? $detalle_compra->fk_dc_compra : ''}}" >
    {!! $errors->first('fk_dc_compra', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_dc_cerveza') ? 'has-error' : ''}}">
    <label for="fk_dc_cerveza" class="control-label">{{ 'Fk Dc Cerveza' }}</label>
    <input class="form-control" name="fk_dc_cerveza" type="number" id="fk_dc_cerveza" value="{{ isset($detalle_compra->fk_dc_cerveza) ? $detalle_compra->fk_dc_cerveza : ''}}" >
    {!! $errors->first('fk_dc_cerveza', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
