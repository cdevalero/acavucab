<div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
    <label for="numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="numero" type="number" id="numero" value="{{ isset($telefono->numero) ? $telefono->numero : ''}}" >
    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cod_area') ? 'has-error' : ''}}">
    <label for="cod_area" class="control-label">{{ 'Cod Area' }}</label>
    <select class="form-control" name="cod_area" type="number" id="cod_area">
        <option type="number"  value="0412">0412</option>
        <option  type="number" value="0414">0414</option>
        <option type="number"  value="0416">0416</option>
        <option  type="number" value="0424">0424</option>
        <option  type="number" value="0426">0426</option>
    </select>
</div>

<div class="form-group {{ $errors->has('fk_telefono_proveedor') ? 'has-error' : ''}}">
    <label for="fk_telefono_proveedor" class="control-label">{{ 'Fk Telefono Proveedor' }}</label>
    <input class="form-control" name="fk_telefono_proveedor" type="number" id="fk_telefono_proveedor" value="{{ isset($telefono->fk_telefono_proveedor) ? $telefono->fk_telefono_proveedor : ''}}" >
    {!! $errors->first('fk_telefono_proveedor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_telefono_clientenatural') ? 'has-error' : ''}}">
    <label for="fk_telefono_clientenatural" class="control-label">{{ 'Fk Telefono Clientenatural' }}</label>
    <input class="form-control" name="fk_telefono_clientenatural" type="number" id="fk_telefono_clientenatural" value="{{ isset($telefono->fk_telefono_clientenatural) ? $telefono->fk_telefono_clientenatural : ''}}" >
    {!! $errors->first('fk_telefono_clientenatural', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_telefono_clientejuridico') ? 'has-error' : ''}}">
    <label for="fk_telefono_clientejuridico" class="control-label">{{ 'Fk Telefono Clientejuridico' }}</label>
    <input class="form-control" name="fk_telefono_clientejuridico" type="number" id="fk_telefono_clientejuridico" value="{{ isset($telefono->fk_telefono_clientejuridico) ? $telefono->fk_telefono_clientejuridico : ''}}" >
    {!! $errors->first('fk_telefono_clientejuridico', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
