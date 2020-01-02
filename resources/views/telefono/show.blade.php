@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">telefono {{ $telefono->codigo_telefono }}</div>
                    <div class="card-body">

                        <a href="{{ url('/telefono') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/telefono/' . $telefono->codigo_telefono . '/edit') }}" title="Edit telefono"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('telefono' . '/' . $telefono->codigo_telefono) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete telefono" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $telefono->codigo_telefono }}</td>
                                    </tr>
                                    <tr><th> Numero </th><td> {{ $telefono->numero }} </td></tr><tr><th> Cod Area </th><td> {{ $telefono->cod_area }} </td></tr><tr><th> Fk Telefono Proveedor </th><td> {{ $telefono->fk_telefono_proveedor }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
