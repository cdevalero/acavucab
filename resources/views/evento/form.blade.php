<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($evento->nombre) ? $evento->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_inicio') ? 'has-error' : ''}}">
    <label for="fecha_inicio" class="control-label">{{ 'Fecha Inicio' }}</label>
    <input class="form-control" name="fecha_inicio" type="datetime-local" id="fecha_inicio" value="{{ isset($evento->fecha_inicio) ? $evento->fecha_inicio : ''}}" >
    {!! $errors->first('fecha_inicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_fin') ? 'has-error' : ''}}">
    <label for="fecha_fin" class="control-label">{{ 'Fecha Fin' }}</label>
    <input class="form-control" name="fecha_fin" type="datetime-local" id="fecha_fin" value="{{ isset($evento->fecha_fin) ? $evento->fecha_fin : ''}}" >
    {!! $errors->first('fecha_fin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_evento_lugar') ? 'has-error' : ''}}">
    <label for="fk_evento_lugar" class="control-label">{{ 'Fk Evento Lugar' }}</label>
    <input class="form-control" name="fk_evento_lugar" type="number" id="fk_evento_lugar" value="{{ isset($evento->fk_evento_lugar) ? $evento->fk_evento_lugar : ''}}" >
    {!! $errors->first('fk_evento_lugar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
