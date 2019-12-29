<div class="form-group {{ $errors->has('fecha_afiliacion') ? 'has-error' : ''}}">
    <label for="fecha_afiliacion" class="control-label">{{ 'Fecha Afiliacion' }}</label>
    <input class="form-control" name="fecha_afiliacion" type="date" id="fecha_afiliacion" value="{{ isset($afiliacionproveedor->fecha_afiliacion) ? $afiliacionproveedor->fecha_afiliacion : ''}}" >
    {!! $errors->first('fecha_afiliacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('costo_afiliacion') ? 'has-error' : ''}}">
    <label for="costo_afiliacion" class="control-label">{{ 'Costo Afiliacion' }}</label>
    <input class="form-control" name="costo_afiliacion" type="number" id="costo_afiliacion" value="{{ isset($afiliacionproveedor->costo_afiliacion) ? $afiliacionproveedor->costo_afiliacion : ''}}" >
    {!! $errors->first('costo_afiliacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_afiliacionproveedor_proveedor') ? 'has-error' : ''}}">
    <label for="fk_afiliacionproveedor_proveedor" class="control-label">{{ 'Fk Afiliacionproveedor Proveedor' }}</label>
    <input class="form-control" name="fk_afiliacionproveedor_proveedor" type="number" id="fk_afiliacionproveedor_proveedor" value="{{ isset($afiliacionproveedor->fk_afiliacionproveedor_proveedor) ? $afiliacionproveedor->fk_afiliacionproveedor_proveedor : ''}}" >
    {!! $errors->first('fk_afiliacionproveedor_proveedor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
