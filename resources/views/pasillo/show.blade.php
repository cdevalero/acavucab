@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pasillo {{ $pasillo->codigo_pasillo }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pasillo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pasillo/' . $pasillo->codigo_pasillo . '/edit') }}" title="Edit pasillo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('pasillo' . '/' . $pasillo->codigo_pasillo) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pasillo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pasillo->codigo_pasillo }}</td>
                                    </tr>
                                    <tr><th> Numero Pasillo </th><td> {{ $pasillo->numero_pasillo }} </td></tr><tr><th> Letra Pasillo </th><td> {{ $pasillo->letra_pasillo }} </td></tr><tr><th> Fk Pasillo Almacen </th><td> {{ $pasillo->fk_pasillo_almacen }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
