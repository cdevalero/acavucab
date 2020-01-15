<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($usuario->nombre) ? $usuario->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'password' }}</label>
    <input class="form-control" name="password" type="password" id="password" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_usuario_rol') ? 'has-error' : ''}}">
    <label for="fk_usuario_rol" class="control-label">{{ 'Fk Usuario Rol' }}</label>
    <input class="form-control" name="fk_usuario_rol" type="number" id="fk_usuario_rol" value="{{ isset($usuario->fk_usuario_rol) ? $usuario->fk_usuario_rol : ''}}" >
    {!! $errors->first('fk_usuario_rol', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
