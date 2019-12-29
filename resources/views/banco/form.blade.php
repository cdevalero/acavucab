<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($banco->nombre) ? $banco->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigocuenta') ? 'has-error' : ''}}">
    <label for="codigocuenta" class="control-label">{{ 'Codigocuenta' }}</label>
    <input class="form-control" name="codigocuenta" type="number" id="codigocuenta" value="{{ isset($banco->codigocuenta) ? $banco->codigocuenta : ''}}" >
    {!! $errors->first('codigocuenta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigocheque') ? 'has-error' : ''}}">
    <label for="codigocheque" class="control-label">{{ 'Codigocheque' }}</label>
    <input class="form-control" name="codigocheque" type="number" id="codigocheque" value="{{ isset($banco->codigocheque) ? $banco->codigocheque : ''}}" >
    {!! $errors->first('codigocheque', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
