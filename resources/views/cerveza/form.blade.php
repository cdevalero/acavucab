<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($cerveza->nombre) ? $cerveza->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($cerveza->precio) ? $cerveza->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('historia') ? 'has-error' : ''}}">
    <label for="historia" class="control-label">{{ 'Historia' }}</label>
    <textarea class="form-control" rows="5" name="historia" type="textarea" id="historia" >{{ isset($cerveza->historia) ? $cerveza->historia : ''}}</textarea>
    {!! $errors->first('historia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('caloria') ? 'has-error' : ''}}">
    <label for="caloria" class="control-label">{{ 'Caloria' }}</label>
    <input class="form-control" name="caloria" type="number" id="caloria" value="{{ isset($cerveza->caloria) ? $cerveza->caloria : ''}}" >
    {!! $errors->first('caloria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('volumen') ? 'has-error' : ''}}">
    <label for="volumen" class="control-label">{{ 'Volumen' }}</label>
    <input class="form-control" name="volumen" type="number" id="volumen" value="{{ isset($cerveza->volumen) ? $cerveza->volumen : ''}}" >
    {!! $errors->first('volumen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_cerveza_anaquel') ? 'has-error' : ''}}">
    <label for="fk_cerveza_anaquel" class="control-label">{{ 'Fk Cerveza Anaquel' }}</label>
    <input class="form-control" name="fk_cerveza_anaquel" type="number" id="fk_cerveza_anaquel" value="{{ isset($cerveza->fk_cerveza_anaquel) ? $cerveza->fk_cerveza_anaquel : ''}}" >
    {!! $errors->first('fk_cerveza_anaquel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_cerveza_tipocerveza') ? 'has-error' : ''}}">
    <label for="fk_cerveza_tipocerveza" class="control-label">{{ 'Fk Cerveza Tipocerveza' }}</label>
    <input class="form-control" name="fk_cerveza_tipocerveza" type="number" id="fk_cerveza_tipocerveza" value="{{ isset($cerveza->fk_cerveza_tipocerveza) ? $cerveza->fk_cerveza_tipocerveza : ''}}" >
    {!! $errors->first('fk_cerveza_tipocerveza', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
