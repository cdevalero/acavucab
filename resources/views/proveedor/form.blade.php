<div class="form-group {{ $errors->has('razon_social') ? 'has-error' : ''}}">
    <label for="razon_social" class="control-label">{{ 'Razon Social' }}</label>
    <input class="form-control" name="razon_social" type="text" id="razon_social" value="{{ isset($proveedor->razon_social) ? $proveedor->razon_social : ''}}" >
    {!! $errors->first('razon_social', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('denominacion_comercial') ? 'has-error' : ''}}">
    <label for="denominacion_comercial" class="control-label">{{ 'Denominacion Comercial' }}</label>
    <input class="form-control" name="denominacion_comercial" type="text" id="denominacion_comercial" value="{{ isset($proveedor->denominacion_comercial) ? $proveedor->denominacion_comercial : ''}}" >
    {!! $errors->first('denominacion_comercial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rif') ? 'has-error' : ''}}">
    <label for="rif" class="control-label">{{ 'Rif' }}</label>
    <input class="form-control" name="rif" type="number" id="rif" value="{{ isset($proveedor->rif) ? $proveedor->rif : ''}}" >
    {!! $errors->first('rif', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('web') ? 'has-error' : ''}}">
    <label for="web" class="control-label">{{ 'Web' }}</label>
    <input class="form-control" name="web" type="text" id="web" value="{{ isset($proveedor->web) ? $proveedor->web : ''}}" >
    {!! $errors->first('web', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_proveedorfisico_lugar') ? 'has-error' : ''}}">
    <label for="fk_proveedorfisico_lugar" class="control-label">{{ 'Fk Proveedorfisico Lugar' }}</label>
    <input class="form-control" name="fk_proveedorfisico_lugar" type="number" id="fk_proveedorfisico_lugar" value="{{ isset($proveedor->fk_proveedorfisico_lugar) ? $proveedor->fk_proveedorfisico_lugar : ''}}" >
    {!! $errors->first('fk_proveedorfisico_lugar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_proveedorfiscal_lugar') ? 'has-error' : ''}}">
    <label for="fk_proveedorfiscal_lugar" class="control-label">{{ 'Fk Proveedorfiscal Lugar' }}</label>
    <input class="form-control" name="fk_proveedorfiscal_lugar" type="number" id="fk_proveedorfiscal_lugar" value="{{ isset($proveedor->fk_proveedorfiscal_lugar) ? $proveedor->fk_proveedorfiscal_lugar : ''}}" >
    {!! $errors->first('fk_proveedorfiscal_lugar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
