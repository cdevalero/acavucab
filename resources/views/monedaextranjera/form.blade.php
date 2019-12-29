<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="number" id="tipo" value="{{ isset($monedaextranjera->tipo) ? $monedaextranjera->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('denominacion') ? 'has-error' : ''}}">
    <label for="denominacion" class="control-label">{{ 'Denominacion' }}</label>
    <input class="form-control" name="denominacion" type="number" id="denominacion" value="{{ isset($monedaextranjera->denominacion) ? $monedaextranjera->denominacion : ''}}" >
    {!! $errors->first('denominacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_billete') ? 'has-error' : ''}}">
    <label for="numero_billete" class="control-label">{{ 'Numero Billete' }}</label>
    <input class="form-control" name="numero_billete" type="number" id="numero_billete" value="{{ isset($monedaextranjera->numero_billete) ? $monedaextranjera->numero_billete : ''}}" >
    {!! $errors->first('numero_billete', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
