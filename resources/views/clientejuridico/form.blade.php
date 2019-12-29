<div class="form-group {{ $errors->has('rif') ? 'has-error' : ''}}">
    <label for="rif" class="control-label">{{ 'Rif' }}</label>
    <input class="form-control" name="rif" type="number" id="rif" value="{{ isset($clientejuridico->rif) ? $clientejuridico->rif : ''}}" >
    {!! $errors->first('rif', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('denominacion_comercial') ? 'has-error' : ''}}">
    <label for="denominacion_comercial" class="control-label">{{ 'Denominacion Comercial' }}</label>
    <input class="form-control" name="denominacion_comercial" type="text" id="denominacion_comercial" value="{{ isset($clientejuridico->denominacion_comercial) ? $clientejuridico->denominacion_comercial : ''}}" >
    {!! $errors->first('denominacion_comercial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('razon_social') ? 'has-error' : ''}}">
    <label for="razon_social" class="control-label">{{ 'Razon Social' }}</label>
    <input class="form-control" name="razon_social" type="text" id="razon_social" value="{{ isset($clientejuridico->razon_social) ? $clientejuridico->razon_social : ''}}" >
    {!! $errors->first('razon_social', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_carnet') ? 'has-error' : ''}}">
    <label for="numero_carnet" class="control-label">{{ 'Numero Carnet' }}</label>
    <input class="form-control" name="numero_carnet" type="number" id="numero_carnet" value="{{ isset($clientejuridico->numero_carnet) ? $clientejuridico->numero_carnet : ''}}" >
    {!! $errors->first('numero_carnet', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capital_disponible') ? 'has-error' : ''}}">
    <label for="capital_disponible" class="control-label">{{ 'Capital Disponible' }}</label>
    <input class="form-control" name="capital_disponible" type="number" id="capital_disponible" value="{{ isset($clientejuridico->capital_disponible) ? $clientejuridico->capital_disponible : ''}}" >
    {!! $errors->first('capital_disponible', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_clientejuridicofisico_lugar') ? 'has-error' : ''}}">
    <label for="fk_clientejuridicofisico_lugar" class="control-label">{{ 'Fk Clientejuridicofisico Lugar' }}</label>
    <input class="form-control" name="fk_clientejuridicofisico_lugar" type="number" id="fk_clientejuridicofisico_lugar" value="{{ isset($clientejuridico->fk_clientejuridicofisico_lugar) ? $clientejuridico->fk_clientejuridicofisico_lugar : ''}}" >
    {!! $errors->first('fk_clientejuridicofisico_lugar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_clientejuridicofiscal_lugar') ? 'has-error' : ''}}">
    <label for="fk_clientejuridicofiscal_lugar" class="control-label">{{ 'Fk Clientejuridicofiscal Lugar' }}</label>
    <input class="form-control" name="fk_clientejuridicofiscal_lugar" type="number" id="fk_clientejuridicofiscal_lugar" value="{{ isset($clientejuridico->fk_clientejuridicofiscal_lugar) ? $clientejuridico->fk_clientejuridicofiscal_lugar : ''}}" >
    {!! $errors->first('fk_clientejuridicofiscal_lugar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_clientejuridico_usuario') ? 'has-error' : ''}}">
    <label for="fk_clientejuridico_usuario" class="control-label">{{ 'Fk Clientejuridico Usuario' }}</label>
    <input class="form-control" name="fk_clientejuridico_usuario" type="number" id="fk_clientejuridico_usuario" value="{{ isset($clientejuridico->fk_clientejuridico_usuario) ? $clientejuridico->fk_clientejuridico_usuario : ''}}" >
    {!! $errors->first('fk_clientejuridico_usuario', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
