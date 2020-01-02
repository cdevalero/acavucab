@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">detalle_compra {{ $detalle_compra->id_dc }}</div>
                    <div class="card-body">

                        <a href="{{ url('/detalle_compra') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/detalle_compra/' . $detalle_compra->id_dc . '/edit') }}" title="Edit detalle_compra"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('detalle_compra' . '/' . $detalle_compra->id_dc) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete detalle_compra" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detalle_compra->id_dc }}</td>
                                    </tr>
                                    <tr><th> Cantidad </th><td> {{ $detalle_compra->cantidad }} </td></tr><tr><th> Precio </th><td> {{ $detalle_compra->precio }} </td></tr><tr><th> Tipo </th><td> {{ $detalle_compra->tipo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
