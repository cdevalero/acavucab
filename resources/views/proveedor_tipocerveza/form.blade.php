<div class="form-group {{ $errors->has('fk_ptc_proveedor') ? 'has-error' : ''}}">
    <label for="fk_ptc_proveedor" class="control-label">{{ 'Fk Ptc Proveedor' }}</label>
    <input class="form-control" name="fk_ptc_proveedor" type="number" id="fk_ptc_proveedor" value="{{ isset($proveedor_tipocerveza->fk_ptc_proveedor) ? $proveedor_tipocerveza->fk_ptc_proveedor : ''}}" >
    {!! $errors->first('fk_ptc_proveedor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ptc_tipocerveza') ? 'has-error' : ''}}">
    <label for="fk_ptc_tipocerveza" class="control-label">{{ 'Fk Ptc Tipocerveza' }}</label>
    <input class="form-control" name="fk_ptc_tipocerveza" type="number" id="fk_ptc_tipocerveza" value="{{ isset($proveedor_tipocerveza->fk_ptc_tipocerveza) ? $proveedor_tipocerveza->fk_ptc_tipocerveza : ''}}" >
    {!! $errors->first('fk_ptc_tipocerveza', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
