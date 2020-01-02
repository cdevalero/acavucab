@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">detalleventum {{ $detalleventum->codigo_detalleventa }}</div>
                    <div class="card-body">

                        <a href="{{ url('/detalleventa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/detalleventa/' . $detalleventum->codigo_detalleventa . '/edit') }}" title="Edit detalleventum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('detalleventa' . '/' . $detalleventum->codigo_detalleventa) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete detalleventum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detalleventum->codigo_detalleventa }}</td>
                                    </tr>
                                    <tr><th> Cantidad </th><td> {{ $detalleventum->cantidad }} </td></tr><tr><th> Precio </th><td> {{ $detalleventum->precio }} </td></tr><tr><th> Fk Detalleventa Venta </th><td> {{ $detalleventum->fk_detalleventa_venta }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
