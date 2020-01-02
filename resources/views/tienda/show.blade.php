@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tienda {{ $tienda->codigo_tienda }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tienda') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/tienda/' . $tienda->codigo_tienda . '/edit') }}" title="Edit tienda"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('tienda' . '/' . $tienda->codigo_tienda) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tienda" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tienda->codigo_tienda }}</td>
                                    </tr>
                                    <tr><th> Rif </th><td> {{ $tienda->rif }} </td></tr><tr><th> Nombre </th><td> {{ $tienda->nombre }} </td></tr><tr><th> Fk Tienda Lugar </th><td> {{ $tienda->fk_tienda_lugar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
