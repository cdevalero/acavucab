<div class="form-group {{ $errors->has('numero_tarjetadebito') ? 'has-error' : ''}}">
    <label for="numero_tarjetadebito" class="control-label">{{ 'Numero Tarjetadebito' }}</label>
    <input class="form-control" name="numero_tarjetadebito" type="number" id="numero_tarjetadebito" value="{{ isset($tarjetadebito->numero_tarjetadebito) ? $tarjetadebito->numero_tarjetadebito : ''}}" >
    {!! $errors->first('numero_tarjetadebito', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_tarjetadebito_banco') ? 'has-error' : ''}}">
    <label for="fk_tarjetadebito_banco" class="control-label">{{ 'Fk Tarjetadebito Banco' }}</label>
    <input class="form-control" name="fk_tarjetadebito_banco" type="number" id="fk_tarjetadebito_banco" value="{{ isset($tarjetadebito->fk_tarjetadebito_banco) ? $tarjetadebito->fk_tarjetadebito_banco : ''}}" >
    {!! $errors->first('fk_tarjetadebito_banco', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
