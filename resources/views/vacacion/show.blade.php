@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">vacacion {{ $vacacion->codigo_vacacion }}</div>
                    <div class="card-body">

                        <a href="{{ url('/vacacion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/vacacion/' . $vacacion->codigo_vacacion . '/edit') }}" title="Edit vacacion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('vacacion' . '/' . $vacacion->codigo_vacacion) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete vacacion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $vacacion->codigo_vacacion }}</td>
                                    </tr>
                                    <tr><th> Fecha Inicio </th><td> {{ $vacacion->fecha_inicio }} </td></tr><tr><th> Fecha Fin </th><td> {{ $vacacion->fecha_fin }} </td></tr><tr><th> Fk Vacacion Empleado </th><td> {{ $vacacion->fk_vacacion_empleado }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
