@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">empleado_beneficio {{ $empleado_beneficio->id_empben }}</div>
                    <div class="card-body">

                        <a href="{{ url('/empleado_beneficio') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/empleado_beneficio/' . $empleado_beneficio->id_empben . '/edit') }}" title="Edit empleado_beneficio"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('empleado_beneficio' . '/' . $empleado_beneficio->id_empben) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete empleado_beneficio" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $empleado_beneficio->id_empben }}</td>
                                    </tr>
                                    <tr><th> Fk Empben Empleado </th><td> {{ $empleado_beneficio->fk_empben_empleado }} </td></tr><tr><th> Fk Empben Beneficio </th><td> {{ $empleado_beneficio->fk_empben_beneficio }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
