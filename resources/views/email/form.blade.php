<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Direccion' }}</label>
    <input class="form-control" name="direccion" type="email" id="direccion" value="{{ isset($email->direccion) ? $email->direccion : ''}}" >
    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_email_proveedor') ? 'has-error' : ''}}">
    <label for="fk_email_proveedor" class="control-label">{{ 'Fk Email Proveedor' }}</label>
    <input class="form-control" name="fk_email_proveedor" type="number" id="fk_email_proveedor" value="{{ isset($email->fk_email_proveedor) ? $email->fk_email_proveedor : ''}}" >
    {!! $errors->first('fk_email_proveedor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_email_clientejuridico') ? 'has-error' : ''}}">
    <label for="fk_email_clientejuridico" class="control-label">{{ 'Fk Email Clientejuridico' }}</label>
    <input class="form-control" name="fk_email_clientejuridico" type="number" id="fk_email_clientejuridico" value="{{ isset($email->fk_email_clientejuridico) ? $email->fk_email_clientejuridico : ''}}" >
    {!! $errors->first('fk_email_clientejuridico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_email_clientenatural') ? 'has-error' : ''}}">
    <label for="fk_email_clientenatural" class="control-label">{{ 'Fk Email Clientenatural' }}</label>
    <input class="form-control" name="fk_email_clientenatural" type="number" id="fk_email_clientenatural" value="{{ isset($email->fk_email_clientenatural) ? $email->fk_email_clientenatural : ''}}" >
    {!! $errors->first('fk_email_clientenatural', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
