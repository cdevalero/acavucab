@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ventum {{ $ventum->codigo_venta }}</div>
                    <div class="card-body">

                        <a href="{{ url('/venta') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/venta/' . $ventum->codigo_venta . '/edit') }}" title="Edit ventum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('venta' . '/' . $ventum->codigo_venta) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete ventum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ventum->codigo_venta }}</td>
                                    </tr>
                                    <tr><th> Numero Facturaventa </th><td> {{ $ventum->numero_facturaventa }} </td></tr><tr><th> Fecha Venta </th><td> {{ $ventum->fecha_venta }} </td></tr><tr><th> Total </th><td> {{ $ventum->total }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
