@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">empleado_horario {{ $empleado_horario->id_eh }}</div>
                    <div class="card-body">

                        <a href="{{ url('/empleado_horario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/empleado_horario/' . $empleado_horario->id_eh . '/edit') }}" title="Edit empleado_horario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('empleado_horario' . '/' . $empleado_horario->id_eh) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete empleado_horario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $empleado_horario->id_eh }}</td>
                                    </tr>
                                    <tr><th> Fk Eh Empleado </th><td> {{ $empleado_horario->fk_eh_empleado }} </td></tr><tr><th> Fk Eh Horario </th><td> {{ $empleado_horario->fk_eh_horario }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
