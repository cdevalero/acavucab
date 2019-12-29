<div class="form-group {{ $errors->has('numero_pasillo') ? 'has-error' : ''}}">
    <label for="numero_pasillo" class="control-label">{{ 'Numero Pasillo' }}</label>
    <input class="form-control" name="numero_pasillo" type="number" id="numero_pasillo" value="{{ isset($pasillo->numero_pasillo) ? $pasillo->numero_pasillo : ''}}" >
    {!! $errors->first('numero_pasillo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('letra_pasillo') ? 'has-error' : ''}}">
    <label for="letra_pasillo" class="control-label">{{ 'Letra Pasillo' }}</label>
    <input class="form-control" name="letra_pasillo" type="text" id="letra_pasillo" value="{{ isset($pasillo->letra_pasillo) ? $pasillo->letra_pasillo : ''}}" >
    {!! $errors->first('letra_pasillo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pasillo_almacen') ? 'has-error' : ''}}">
    <label for="fk_pasillo_almacen" class="control-label">{{ 'Fk Pasillo Almacen' }}</label>
    <input class="form-control" name="fk_pasillo_almacen" type="number" id="fk_pasillo_almacen" value="{{ isset($pasillo->fk_pasillo_almacen) ? $pasillo->fk_pasillo_almacen : ''}}" >
    {!! $errors->first('fk_pasillo_almacen', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
