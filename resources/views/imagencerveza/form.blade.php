<div class="form-group {{ $errors->has('fk_imagencerveza_cerveza') ? 'has-error' : ''}}">
    <label for="fk_imagencerveza_cerveza" class="control-label">{{ 'Fk Imagencerveza Cerveza' }}</label>
    <input class="form-control" name="fk_imagencerveza_cerveza" type="number" id="fk_imagencerveza_cerveza" value="{{ isset($imagencerveza->fk_imagencerveza_cerveza) ? $imagencerveza->fk_imagencerveza_cerveza : ''}}" >
    {!! $errors->first('fk_imagencerveza_cerveza', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
    <label for="imagen" class="control-label">{{ 'Imagen' }}</label>
    <input class="form-control" name="imagen" type="file" id="imagen" value="{{ isset($imagencerveza->imagen) ? $imagencerveza->imagen : ''}}" >
    {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
