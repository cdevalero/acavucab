<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($inventario_cerveza->cantidad) ? $inventario_cerveza->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_invcer_evento') ? 'has-error' : ''}}">
    <label for="fk_invcer_evento" class="control-label">{{ 'Fk Invcer Evento' }}</label>
    <input class="form-control" name="fk_invcer_evento" type="number" id="fk_invcer_evento" value="{{ isset($inventario_cerveza->fk_invcer_evento) ? $inventario_cerveza->fk_invcer_evento : ''}}" >
    {!! $errors->first('fk_invcer_evento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_invcer_cerveza') ? 'has-error' : ''}}">
    <label for="fk_invcer_cerveza" class="control-label">{{ 'Fk Invcer Cerveza' }}</label>
    <input class="form-control" name="fk_invcer_cerveza" type="number" id="fk_invcer_cerveza" value="{{ isset($inventario_cerveza->fk_invcer_cerveza) ? $inventario_cerveza->fk_invcer_cerveza : ''}}" >
    {!! $errors->first('fk_invcer_cerveza', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
