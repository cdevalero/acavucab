<div class="form-group {{ $errors->has('calificacion') ? 'has-error' : ''}}">
    <label for="calificacion" class="control-label">{{ 'Calificacion' }}</label>
    <input class="form-control" name="calificacion" type="number" id="calificacion" value="{{ isset($comentario->calificacion) ? $comentario->calificacion : ''}}" >
    {!! $errors->first('calificacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($comentario->descripcion) ? $comentario->descripcion : ''}}</textarea>
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_comentario_cerveza') ? 'has-error' : ''}}">
    <label for="fk_comentario_cerveza" class="control-label">{{ 'Fk Comentario Cerveza' }}</label>
    <input class="form-control" name="fk_comentario_cerveza" type="number" id="fk_comentario_cerveza" value="{{ isset($comentario->fk_comentario_cerveza) ? $comentario->fk_comentario_cerveza : ''}}" >
    {!! $errors->first('fk_comentario_cerveza', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_comentario_clientejuririco') ? 'has-error' : ''}}">
    <label for="fk_comentario_clientejuririco" class="control-label">{{ 'Fk Comentario Clientejuririco' }}</label>
    <input class="form-control" name="fk_comentario_clientejuririco" type="number" id="fk_comentario_clientejuririco" value="{{ isset($comentario->fk_comentario_clientejuririco) ? $comentario->fk_comentario_clientejuririco : ''}}" >
    {!! $errors->first('fk_comentario_clientejuririco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_comentario_clientenatural') ? 'has-error' : ''}}">
    <label for="fk_comentario_clientenatural" class="control-label">{{ 'Fk Comentario Clientenatural' }}</label>
    <input class="form-control" name="fk_comentario_clientenatural" type="number" id="fk_comentario_clientenatural" value="{{ isset($comentario->fk_comentario_clientenatural) ? $comentario->fk_comentario_clientenatural : ''}}" >
    {!! $errors->first('fk_comentario_clientenatural', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
