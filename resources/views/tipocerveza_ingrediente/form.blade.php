<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($tipocerveza_ingrediente->cantidad) ? $tipocerveza_ingrediente->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('peso') ? 'has-error' : ''}}">
    <label for="peso" class="control-label">{{ 'Peso' }}</label>
    <input class="form-control" name="peso" type="number" id="peso" value="{{ isset($tipocerveza_ingrediente->peso) ? $tipocerveza_ingrediente->peso : ''}}" >
    {!! $errors->first('peso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tiempo_agregar') ? 'has-error' : ''}}">
    <label for="tiempo_agregar" class="control-label">{{ 'Tiempo Agregar' }}</label>
    <textarea class="form-control" rows="5" name="tiempo_agregar" type="textarea" id="tiempo_agregar" >{{ isset($tipocerveza_ingrediente->tiempo_agregar) ? $tipocerveza_ingrediente->tiempo_agregar : ''}}</textarea>
    {!! $errors->first('tiempo_agregar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ti_tipocerveza') ? 'has-error' : ''}}">
    <label for="fk_ti_tipocerveza" class="control-label">{{ 'Fk Ti Tipocerveza' }}</label>
    <input class="form-control" name="fk_ti_tipocerveza" type="number" id="fk_ti_tipocerveza" value="{{ isset($tipocerveza_ingrediente->fk_ti_tipocerveza) ? $tipocerveza_ingrediente->fk_ti_tipocerveza : ''}}" >
    {!! $errors->first('fk_ti_tipocerveza', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ti_ingrediente') ? 'has-error' : ''}}">
    <label for="fk_ti_ingrediente" class="control-label">{{ 'Fk Ti Ingrediente' }}</label>
    <input class="form-control" name="fk_ti_ingrediente" type="number" id="fk_ti_ingrediente" value="{{ isset($tipocerveza_ingrediente->fk_ti_ingrediente) ? $tipocerveza_ingrediente->fk_ti_ingrediente : ''}}" >
    {!! $errors->first('fk_ti_ingrediente', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
