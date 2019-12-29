<div class="form-group {{ $errors->has('rif') ? 'has-error' : ''}}">
    <label for="rif" class="control-label">{{ 'Rif' }}</label>
    <input class="form-control" name="rif" type="number" id="rif" value="{{ isset($tienda->rif) ? $tienda->rif : ''}}" >
    {!! $errors->first('rif', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($tienda->nombre) ? $tienda->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_tienda_lugar') ? 'has-error' : ''}}">
    <label for="fk_tienda_lugar" class="control-label">{{ 'Fk Tienda Lugar' }}</label>
    <input class="form-control" name="fk_tienda_lugar" type="number" id="fk_tienda_lugar" value="{{ isset($tienda->fk_tienda_lugar) ? $tienda->fk_tienda_lugar : ''}}" >
    {!! $errors->first('fk_tienda_lugar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_tienda_almacen') ? 'has-error' : ''}}">
    <label for="fk_tienda_almacen" class="control-label">{{ 'Fk Tienda Almacen' }}</label>
    <input class="form-control" name="fk_tienda_almacen" type="number" id="fk_tienda_almacen" value="{{ isset($tienda->fk_tienda_almacen) ? $tienda->fk_tienda_almacen : ''}}" >
    {!! $errors->first('fk_tienda_almacen', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
