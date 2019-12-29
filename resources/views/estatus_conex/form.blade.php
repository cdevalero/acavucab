<div class="form-group {{ $errors->has('fecha_hora') ? 'has-error' : ''}}">
    <label for="fecha_hora" class="control-label">{{ 'Fecha Hora' }}</label>
    <input class="form-control" name="fecha_hora" type="datetime-local" id="fecha_hora" value="{{ isset($estatus_conex->fecha_hora) ? $estatus_conex->fecha_hora : ''}}" >
    {!! $errors->first('fecha_hora', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ecx_venta') ? 'has-error' : ''}}">
    <label for="fk_ecx_venta" class="control-label">{{ 'Fk Ecx Venta' }}</label>
    <input class="form-control" name="fk_ecx_venta" type="number" id="fk_ecx_venta" value="{{ isset($estatus_conex->fk_ecx_venta) ? $estatus_conex->fk_ecx_venta : ''}}" >
    {!! $errors->first('fk_ecx_venta', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ecx_compra') ? 'has-error' : ''}}">
    <label for="fk_ecx_compra" class="control-label">{{ 'Fk Ecx Compra' }}</label>
    <input class="form-control" name="fk_ecx_compra" type="number" id="fk_ecx_compra" value="{{ isset($estatus_conex->fk_ecx_compra) ? $estatus_conex->fk_ecx_compra : ''}}" >
    {!! $errors->first('fk_ecx_compra', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_ecx_estatus') ? 'has-error' : ''}}">
    <label for="fk_ecx_estatus" class="control-label">{{ 'Fk Ecx Estatus' }}</label>
    <input class="form-control" name="fk_ecx_estatus" type="number" id="fk_ecx_estatus" value="{{ isset($estatus_conex->fk_ecx_estatus) ? $estatus_conex->fk_ecx_estatus : ''}}" >
    {!! $errors->first('fk_ecx_estatus', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
