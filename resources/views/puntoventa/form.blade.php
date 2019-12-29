<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($puntoventum->cantidad) ? $puntoventum->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_puntoventa_puntovalor') ? 'has-error' : ''}}">
    <label for="fk_puntoventa_puntovalor" class="control-label">{{ 'Fk Puntoventa Puntovalor' }}</label>
    <input class="form-control" name="fk_puntoventa_puntovalor" type="number" id="fk_puntoventa_puntovalor" value="{{ isset($puntoventum->fk_puntoventa_puntovalor) ? $puntoventum->fk_puntoventa_puntovalor : ''}}" >
    {!! $errors->first('fk_puntoventa_puntovalor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
