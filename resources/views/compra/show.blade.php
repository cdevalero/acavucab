@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">compra {{ $compra->codigo_compra }}</div>
                    <div class="card-body">

                        <a href="{{ url('/compra') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/compra/' . $compra->codigo_compra . '/edit') }}" title="Edit compra"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('compra' . '/' . $compra->codigo_compra) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete compra" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $compra->codigo_compra }}</td>
                                    </tr>
                                    <tr><th> Fecha </th><td> {{ $compra->fecha }} </td></tr><tr><th> Total </th><td> {{ $compra->total }} </td></tr><tr><th> Fk Compra Proveedor </th><td> {{ $compra->fk_compra_proveedor }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
