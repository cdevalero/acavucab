<div class="form-group {{ $errors->has('numeropaso') ? 'has-error' : ''}}">
    <label for="numeropaso" class="control-label">{{ 'Numeropaso' }}</label>
    <input class="form-control" name="numeropaso" type="number" id="numeropaso" value="{{ isset($pasopreparacion->numeropaso) ? $pasopreparacion->numeropaso : ''}}" >
    {!! $errors->first('numeropaso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcionpaso') ? 'has-error' : ''}}">
    <label for="descripcionpaso" class="control-label">{{ 'Descripcionpaso' }}</label>
    <textarea class="form-control" rows="5" name="descripcionpaso" type="textarea" id="descripcionpaso" >{{ isset($pasopreparacion->descripcionpaso) ? $pasopreparacion->descripcionpaso : ''}}</textarea>
    {!! $errors->first('descripcionpaso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_pasopreparacio_tipocerveza') ? 'has-error' : ''}}">
    <label for="fk_pasopreparacio_tipocerveza" class="control-label">{{ 'Fk Pasopreparacio Tipocerveza' }}</label>
    <input class="form-control" name="fk_pasopreparacio_tipocerveza" type="number" id="fk_pasopreparacio_tipocerveza" value="{{ isset($pasopreparacion->fk_pasopreparacio_tipocerveza) ? $pasopreparacion->fk_pasopreparacio_tipocerveza : ''}}" >
    {!! $errors->first('fk_pasopreparacio_tipocerveza', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
