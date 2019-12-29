<div class="form-group {{ $errors->has('numero_tarjetacredito') ? 'has-error' : ''}}">
    <label for="numero_tarjetacredito" class="control-label">{{ 'Numero Tarjetacredito' }}</label>
    <input class="form-control" name="numero_tarjetacredito" type="number" id="numero_tarjetacredito" value="{{ isset($tarjetacredito->numero_tarjetacredito) ? $tarjetacredito->numero_tarjetacredito : ''}}" >
    {!! $errors->first('numero_tarjetacredito', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($tarjetacredito->tipo) ? $tarjetacredito->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_tarjetacredito_banco') ? 'has-error' : ''}}">
    <label for="fk_tarjetacredito_banco" class="control-label">{{ 'Fk Tarjetacredito Banco' }}</label>
    <input class="form-control" name="fk_tarjetacredito_banco" type="number" id="fk_tarjetacredito_banco" value="{{ isset($tarjetacredito->fk_tarjetacredito_banco) ? $tarjetacredito->fk_tarjetacredito_banco : ''}}" >
    {!! $errors->first('fk_tarjetacredito_banco', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
