<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($personacontacto->nombre) ? $personacontacto->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control" name="apellido" type="text" id="apellido" value="{{ isset($personacontacto->apellido) ? $personacontacto->apellido : ''}}" >
    {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_personacontacto_clientejuridico') ? 'has-error' : ''}}">
    <label for="fk_personacontacto_clientejuridico" class="control-label">{{ 'Fk Personacontacto Clientejuridico' }}</label>
    <input class="form-control" name="fk_personacontacto_clientejuridico" type="number" id="fk_personacontacto_clientejuridico" value="{{ isset($personacontacto->fk_personacontacto_clientejuridico) ? $personacontacto->fk_personacontacto_clientejuridico : ''}}" >
    {!! $errors->first('fk_personacontacto_clientejuridico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_personacontacto_proveedor') ? 'has-error' : ''}}">
    <label for="fk_personacontacto_proveedor" class="control-label">{{ 'Fk Personacontacto Proveedor' }}</label>
    <input class="form-control" name="fk_personacontacto_proveedor" type="number" id="fk_personacontacto_proveedor" value="{{ isset($personacontacto->fk_personacontacto_proveedor) ? $personacontacto->fk_personacontacto_proveedor : ''}}" >
    {!! $errors->first('fk_personacontacto_proveedor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
