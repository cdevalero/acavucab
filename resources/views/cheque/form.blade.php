<div class="form-group {{ $errors->has('numero_cheque') ? 'has-error' : ''}}">
    <label for="numero_cheque" class="control-label">{{ 'Numero Cheque' }}</label>
    <input class="form-control" name="numero_cheque" type="number" id="numero_cheque" value="{{ isset($cheque->numero_cheque) ? $cheque->numero_cheque : ''}}" >
    {!! $errors->first('numero_cheque', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_cheque_banco') ? 'has-error' : ''}}">
    <label for="fk_cheque_banco" class="control-label">{{ 'Fk Cheque Banco' }}</label>
    <input class="form-control" name="fk_cheque_banco" type="number" id="fk_cheque_banco" value="{{ isset($cheque->fk_cheque_banco) ? $cheque->fk_cheque_banco : ''}}" >
    {!! $errors->first('fk_cheque_banco', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
