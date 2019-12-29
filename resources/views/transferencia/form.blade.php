<div class="form-group {{ $errors->has('numero_transferencia') ? 'has-error' : ''}}">
    <label for="numero_transferencia" class="control-label">{{ 'Numero Transferencia' }}</label>
    <input class="form-control" name="numero_transferencia" type="number" id="numero_transferencia" value="{{ isset($transferencium->numero_transferencia) ? $transferencium->numero_transferencia : ''}}" >
    {!! $errors->first('numero_transferencia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_transferencia_banco') ? 'has-error' : ''}}">
    <label for="fk_transferencia_banco" class="control-label">{{ 'Fk Transferencia Banco' }}</label>
    <input class="form-control" name="fk_transferencia_banco" type="number" id="fk_transferencia_banco" value="{{ isset($transferencium->fk_transferencia_banco) ? $transferencium->fk_transferencia_banco : ''}}" >
    {!! $errors->first('fk_transferencia_banco', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
