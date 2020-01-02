@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">inventario_cerveza {{ $inventario_cerveza->id_invcer }}</div>
                    <div class="card-body">

                        <a href="{{ url('/inventario_cerveza') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/inventario_cerveza/' . $inventario_cerveza->id_invcer . '/edit') }}" title="Edit inventario_cerveza"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('inventario_cerveza' . '/' . $inventario_cerveza->id_invcer) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete inventario_cerveza" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $inventario_cerveza->id_invcer }}</td>
                                    </tr>
                                    <tr><th> Cantidad </th><td> {{ $inventario_cerveza->cantidad }} </td></tr><tr><th> Fk Invcer Evento </th><td> {{ $inventario_cerveza->fk_invcer_evento }} </td></tr><tr><th> Fk Invcer Cerveza </th><td> {{ $inventario_cerveza->fk_invcer_cerveza }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
