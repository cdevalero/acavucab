<div class="form-group {{ $errors->has('hora_entrada') ? 'has-error' : ''}}">
    <label for="hora_entrada" class="control-label">{{ 'Hora Entrada' }}</label>
    <input class="form-control" name="hora_entrada" type="time" id="hora_entrada" value="{{ isset($horario->hora_entrada) ? $horario->hora_entrada : ''}}" >
    {!! $errors->first('hora_entrada', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hora_salida') ? 'has-error' : ''}}">
    <label for="hora_salida" class="control-label">{{ 'Hora Salida' }}</label>
    <input class="form-control" name="hora_salida" type="time" id="hora_salida" value="{{ isset($horario->hora_salida) ? $horario->hora_salida : ''}}" >
    {!! $errors->first('hora_salida', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dia') ? 'has-error' : ''}}">
    <label for="dia" class="control-label">{{ 'Dia' }}</label>
    <input class="form-control" name="dia" type="number" id="dia" value="{{ isset($horario->dia) ? $horario->dia : ''}}" >
    {!! $errors->first('dia', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
