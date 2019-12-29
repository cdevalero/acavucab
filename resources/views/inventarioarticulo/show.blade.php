@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">inventarioarticulo {{ $inventarioarticulo->codigo_inventarioarticulo }}</div>
                    <div class="card-body">

                        <a href="{{ url('/inventarioarticulo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/inventarioarticulo/' . $inventarioarticulo->codigo_inventarioarticulo . '/edit') }}" title="Edit inventarioarticulo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('inventarioarticulo' . '/' . $inventarioarticulo->codigo_inventarioarticulo) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete inventarioarticulo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $inventarioarticulo->codigo_inventarioarticulo }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $inventarioarticulo->nombre }} </td></tr><tr><th> Cantidad </th><td> {{ $inventarioarticulo->cantidad }} </td></tr><tr><th> Fk Inventarioarticulo Evento </th><td> {{ $inventarioarticulo->fk_inventarioarticulo_evento }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
