@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">estatus_conex {{ $estatus_conex->id_ecx }}</div>
                    <div class="card-body">

                        <a href="{{ url('/estatus_conex') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/estatus_conex/' . $estatus_conex->id_ecx . '/edit') }}" title="Edit estatus_conex"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('estatus_conex' . '/' . $estatus_conex->id_ecx) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete estatus_conex" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $estatus_conex->id_ecx }}</td>
                                    </tr>
                                    <tr><th> Fecha Hora </th><td> {{ $estatus_conex->fecha_hora }} </td></tr><tr><th> Fk Ecx Venta </th><td> {{ $estatus_conex->fk_ecx_venta }} </td></tr><tr><th> Fk Ecx Compra </th><td> {{ $estatus_conex->fk_ecx_compra }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
