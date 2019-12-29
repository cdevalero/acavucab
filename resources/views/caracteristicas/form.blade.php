<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($caracteristica->nombre) ? $caracteristica->nombre : ''}}" >
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
    <label for="color" class="control-label">{{ 'Color' }}</label>
    <input class="form-control" name="color" type="text" id="color" value="{{ isset($caracteristica->color) ? $caracteristica->color : ''}}" >
    {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grado_alcohol') ? 'has-error' : ''}}">
    <label for="grado_alcohol" class="control-label">{{ 'Grado Alcohol' }}</label>
    <input class="form-control" name="grado_alcohol" type="number" id="grado_alcohol" value="{{ isset($caracteristica->grado_alcohol) ? $caracteristica->grado_alcohol : ''}}" >
    {!! $errors->first('grado_alcohol', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('densidad_inicial') ? 'has-error' : ''}}">
    <label for="densidad_inicial" class="control-label">{{ 'Densidad Inicial' }}</label>
    <input class="form-control" name="densidad_inicial" type="number" id="densidad_inicial" value="{{ isset($caracteristica->densidad_inicial) ? $caracteristica->densidad_inicial : ''}}" >
    {!! $errors->first('densidad_inicial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('densidad_final') ? 'has-error' : ''}}">
    <label for="densidad_final" class="control-label">{{ 'Densidad Final' }}</label>
    <input class="form-control" name="densidad_final" type="number" id="densidad_final" value="{{ isset($caracteristica->densidad_final) ? $caracteristica->densidad_final : ''}}" >
    {!! $errors->first('densidad_final', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ibus') ? 'has-error' : ''}}">
    <label for="ibus" class="control-label">{{ 'Ibus' }}</label>
    <input class="form-control" name="ibus" type="number" id="ibus" value="{{ isset($caracteristica->ibus) ? $caracteristica->ibus : ''}}" >
    {!! $errors->first('ibus', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aroma') ? 'has-error' : ''}}">
    <label for="aroma" class="control-label">{{ 'Aroma' }}</label>
    <textarea class="form-control" rows="5" name="aroma" type="textarea" id="aroma" >{{ isset($caracteristica->aroma) ? $caracteristica->aroma : ''}}</textarea>
    {!! $errors->first('aroma', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sabor') ? 'has-error' : ''}}">
    <label for="sabor" class="control-label">{{ 'Sabor' }}</label>
    <textarea class="form-control" rows="5" name="sabor" type="textarea" id="sabor" >{{ isset($caracteristica->sabor) ? $caracteristica->sabor : ''}}</textarea>
    {!! $errors->first('sabor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('historia') ? 'has-error' : ''}}">
    <label for="historia" class="control-label">{{ 'Historia' }}</label>
    <textarea class="form-control" rows="5" name="historia" type="textarea" id="historia" >{{ isset($caracteristica->historia) ? $caracteristica->historia : ''}}</textarea>
    {!! $errors->first('historia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_caracteristica_tipocerveza') ? 'has-error' : ''}}">
    <label for="fk_caracteristica_tipocerveza" class="control-label">{{ 'Fk Caracteristica Tipocerveza' }}</label>
    <input class="form-control" name="fk_caracteristica_tipocerveza" type="number" id="fk_caracteristica_tipocerveza" value="{{ isset($caracteristica->fk_caracteristica_tipocerveza) ? $caracteristica->fk_caracteristica_tipocerveza : ''}}" >
    {!! $errors->first('fk_caracteristica_tipocerveza', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
