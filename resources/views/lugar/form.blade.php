<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($lugar->nombre) ? $lugar->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <select class="form-control" name="tipo" id="tipo">
        <option value="Estado">Estado</option>
        <option value="Municipio">Municipio</option>
        <option value="Parroquia">Parroquia</option>
    </select>

</div>

<div class="form-group {{ $errors->has('fk_lugar_lugar') ? 'has-error' : ''}}">
    <label for="fk_lugar_lugar" class="control-label">{{ 'Fk Lugar Lugar' }}</label>
    <input class="form-control" name="fk_lugar_lugar" type="number" id="fk_lugar_lugar" value="{{ isset($lugar->fk_lugar_lugar) ? $lugar->fk_lugar_lugar : ''}}" >
    {!! $errors->first('fk_lugar_lugar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

