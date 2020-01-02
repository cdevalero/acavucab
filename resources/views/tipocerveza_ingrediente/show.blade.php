@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tipocerveza_ingrediente {{ $tipocerveza_ingrediente->id_ti }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tipocerveza_ingrediente') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/tipocerveza_ingrediente/' . $tipocerveza_ingrediente->id_ti . '/edit') }}" title="Edit tipocerveza_ingrediente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('tipocerveza_ingrediente' . '/' . $tipocerveza_ingrediente->id_ti) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tipocerveza_ingrediente" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tipocerveza_ingrediente->id_ti }}</td>
                                    </tr>
                                    <tr><th> Cantidad </th><td> {{ $tipocerveza_ingrediente->cantidad }} </td></tr><tr><th> Peso </th><td> {{ $tipocerveza_ingrediente->peso }} </td></tr><tr><th> Tiempo Agregar </th><td> {{ $tipocerveza_ingrediente->tiempo_agregar }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
