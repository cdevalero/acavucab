<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="datetime-local" id="fecha" value="{{ isset($presupuesto->fecha) ? $presupuesto->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($presupuesto->total) ? $presupuesto->total : ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_presupuesto_clientejuridico') ? 'has-error' : ''}}">
    <label for="fk_presupuesto_clientejuridico" class="control-label">{{ 'Fk Presupuesto Clientejuridico' }}</label>
    <input class="form-control" name="fk_presupuesto_clientejuridico" type="number" id="fk_presupuesto_clientejuridico" value="{{ isset($presupuesto->fk_presupuesto_clientejuridico) ? $presupuesto->fk_presupuesto_clientejuridico : ''}}" >
    {!! $errors->first('fk_presupuesto_clientejuridico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_presupuesto_clientenatural') ? 'has-error' : ''}}">
    <label for="fk_presupuesto_clientenatural" class="control-label">{{ 'Fk Presupuesto Clientenatural' }}</label>
    <input class="form-control" name="fk_presupuesto_clientenatural" type="number" id="fk_presupuesto_clientenatural" value="{{ isset($presupuesto->fk_presupuesto_clientenatural) ? $presupuesto->fk_presupuesto_clientenatural : ''}}" >
    {!! $errors->first('fk_presupuesto_clientenatural', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
