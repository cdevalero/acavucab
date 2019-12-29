@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">faltum {{ $faltum->codigo_falta }}</div>
                    <div class="card-body">

                        <a href="{{ url('/falta') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/falta/' . $faltum->codigo_falta . '/edit') }}" title="Edit faltum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('falta' . '/' . $faltum->codigo_falta) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete faltum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $faltum->codigo_falta }}</td>
                                    </tr>
                                    <tr><th> Tipo </th><td> {{ $faltum->tipo }} </td></tr><tr><th> Fecha </th><td> {{ $faltum->fecha }} </td></tr><tr><th> Fk Falta Empleado </th><td> {{ $faltum->fk_falta_empleado }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
