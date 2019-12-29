<div class="form-group {{ $errors->has('fecha_publicacion') ? 'has-error' : ''}}">
    <label for="fecha_publicacion" class="control-label">{{ 'Fecha Publicacion' }}</label>
    <input class="form-control" name="fecha_publicacion" type="date" id="fecha_publicacion" value="{{ isset($revistum->fecha_publicacion) ? $revistum->fecha_publicacion : ''}}" >
    {!! $errors->first('fecha_publicacion', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
