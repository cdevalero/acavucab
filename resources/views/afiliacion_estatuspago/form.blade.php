<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="datetime-local" id="fecha" value="{{ isset($afiliacion_estatuspago->fecha) ? $afiliacion_estatuspago->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_aep_afiliacionproveedor') ? 'has-error' : ''}}">
    <label for="fk_aep_afiliacionproveedor" class="control-label">{{ 'Fk Aep Afiliacionproveedor' }}</label>
    <input class="form-control" name="fk_aep_afiliacionproveedor" type="number" id="fk_aep_afiliacionproveedor" value="{{ isset($afiliacion_estatuspago->fk_aep_afiliacionproveedor) ? $afiliacion_estatuspago->fk_aep_afiliacionproveedor : ''}}" >
    {!! $errors->first('fk_aep_afiliacionproveedor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_aep_estatuspago') ? 'has-error' : ''}}">
    <label for="fk_aep_estatuspago" class="control-label">{{ 'Fk Aep Estatuspago' }}</label>
    <input class="form-control" name="fk_aep_estatuspago" type="number" id="fk_aep_estatuspago" value="{{ isset($afiliacion_estatuspago->fk_aep_estatuspago) ? $afiliacion_estatuspago->fk_aep_estatuspago : ''}}" >
    {!! $errors->first('fk_aep_estatuspago', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
