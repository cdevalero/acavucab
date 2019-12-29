<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($inventarioarticulo->nombre) ? $inventarioarticulo->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($inventarioarticulo->cantidad) ? $inventarioarticulo->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_inventarioarticulo_evento') ? 'has-error' : ''}}">
    <label for="fk_inventarioarticulo_evento" class="control-label">{{ 'Fk Inventarioarticulo Evento' }}</label>
    <input class="form-control" name="fk_inventarioarticulo_evento" type="number" id="fk_inventarioarticulo_evento" value="{{ isset($inventarioarticulo->fk_inventarioarticulo_evento) ? $inventarioarticulo->fk_inventarioarticulo_evento : ''}}" >
    {!! $errors->first('fk_inventarioarticulo_evento', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
