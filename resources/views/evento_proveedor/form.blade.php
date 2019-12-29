<div class="form-group {{ $errors->has('fk_ep_evento') ? 'has-error' : ''}}">
    <label for="fk_ep_evento" class="control-label">{{ 'Fk Ep Evento' }}</label>
    <input class="form-control" name="fk_ep_evento" type="number" id="fk_ep_evento" value="{{ isset($evento_proveedor->fk_ep_evento) ? $evento_proveedor->fk_ep_evento : ''}}" >
    {!! $errors->first('fk_ep_evento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ep_proveedor') ? 'has-error' : ''}}">
    <label for="fk_ep_proveedor" class="control-label">{{ 'Fk Ep Proveedor' }}</label>
    <input class="form-control" name="fk_ep_proveedor" type="number" id="fk_ep_proveedor" value="{{ isset($evento_proveedor->fk_ep_proveedor) ? $evento_proveedor->fk_ep_proveedor : ''}}" >
    {!! $errors->first('fk_ep_proveedor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ep_actividad') ? 'has-error' : ''}}">
    <label for="fk_ep_actividad" class="control-label">{{ 'Fk Ep Actividad' }}</label>
    <input class="form-control" name="fk_ep_actividad" type="number" id="fk_ep_actividad" value="{{ isset($evento_proveedor->fk_ep_actividad) ? $evento_proveedor->fk_ep_actividad : ''}}" >
    {!! $errors->first('fk_ep_actividad', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
