<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($entrada->nombre) ? $entrada->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($entrada->tipo) ? $entrada->tipo : ''}}" >
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_entrada_evento') ? 'has-error' : ''}}">
    <label for="fk_entrada_evento" class="control-label">{{ 'Fk Entrada Evento' }}</label>
    <input class="form-control" name="fk_entrada_evento" type="number" id="fk_entrada_evento" value="{{ isset($entrada->fk_entrada_evento) ? $entrada->fk_entrada_evento : ''}}" >
    {!! $errors->first('fk_entrada_evento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estatus') ? 'has-error' : ''}}">
    <label for="estatus" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="estatus" type="number" id="estatus" value="{{ isset($entrada->estatus) ? $entrada->estatus : ''}}" >
    {!! $errors->first('estatus', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
