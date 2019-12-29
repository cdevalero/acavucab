<div class="form-group {{ $errors->has('rif') ? 'has-error' : ''}}">
    <label for="rif" class="control-label">{{ 'Rif' }}</label>
    <input class="form-control" name="rif" type="number" id="rif" value="{{ isset($clientenatural->rif) ? $clientenatural->rif : ''}}" >
    {!! $errors->first('rif', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($clientenatural->nombre) ? $clientenatural->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($clientenatural->apellido) ? $clientenatural->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
    <label for="cedula" class="control-label">{{ 'Cedula' }}</label>
    <input class="form-control" name="cedula" type="number" id="cedula" value="{{ isset($clientenatural->cedula) ? $clientenatural->cedula : ''}}" >
    {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_carnet') ? 'has-error' : ''}}">
    <label for="numero_carnet" class="control-label">{{ 'Numero Carnet' }}</label>
    <input class="form-control" name="numero_carnet" type="number" id="numero_carnet" value="{{ isset($clientenatural->numero_carnet) ? $clientenatural->numero_carnet : ''}}" >
    {!! $errors->first('numero_carnet', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_clientenatural_lugar') ? 'has-error' : ''}}">
    <label for="fk_clientenatural_lugar" class="control-label">{{ 'Fk Clientenatural Lugar' }}</label>
    <input class="form-control" name="fk_clientenatural_lugar" type="number" id="fk_clientenatural_lugar" value="{{ isset($clientenatural->fk_clientenatural_lugar) ? $clientenatural->fk_clientenatural_lugar : ''}}" >
    {!! $errors->first('fk_clientenatural_lugar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_clientenatural_usuario') ? 'has-error' : ''}}">
    <label for="fk_clientenatural_usuario" class="control-label">{{ 'Fk Clientenatural Usuario' }}</label>
    <input class="form-control" name="fk_clientenatural_usuario" type="number" id="fk_clientenatural_usuario" value="{{ isset($clientenatural->fk_clientenatural_usuario) ? $clientenatural->fk_clientenatural_usuario : ''}}" >
    {!! $errors->first('fk_clientenatural_usuario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
