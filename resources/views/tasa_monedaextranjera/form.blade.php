<div class="form-group {{ $errors->has('fk_tm_tasacambiaria') ? 'has-error' : ''}}">
    <label for="fk_tm_tasacambiaria" class="control-label">{{ 'Fk Tm Tasacambiaria' }}</label>
    <input class="form-control" name="fk_tm_tasacambiaria" type="number" id="fk_tm_tasacambiaria" value="{{ isset($tasa_monedaextranjera->fk_tm_tasacambiaria) ? $tasa_monedaextranjera->fk_tm_tasacambiaria : ''}}" >
    {!! $errors->first('fk_tm_tasacambiaria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_tm_monedaextranjera') ? 'has-error' : ''}}">
    <label for="fk_tm_monedaextranjera" class="control-label">{{ 'Fk Tm Monedaextranjera' }}</label>
    <input class="form-control" name="fk_tm_monedaextranjera" type="number" id="fk_tm_monedaextranjera" value="{{ isset($tasa_monedaextranjera->fk_tm_monedaextranjera) ? $tasa_monedaextranjera->fk_tm_monedaextranjera : ''}}" >
    {!! $errors->first('fk_tm_monedaextranjera', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
