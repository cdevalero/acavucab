@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pasopreparacion {{ $pasopreparacion->codigo_pasopreparacion }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pasopreparacion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pasopreparacion/' . $pasopreparacion->codigo_pasopreparacion . '/edit') }}" title="Edit pasopreparacion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('pasopreparacion' . '/' . $pasopreparacion->codigo_pasopreparacion) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pasopreparacion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pasopreparacion->codigo_pasopreparacion }}</td>
                                    </tr>
                                    <tr><th> Numeropaso </th><td> {{ $pasopreparacion->numeropaso }} </td></tr><tr><th> Descripcionpaso </th><td> {{ $pasopreparacion->descripcionpaso }} </td></tr><tr><th> Fk Pasopreparacio Tipocerveza </th><td> {{ $pasopreparacion->fk_pasopreparacio_tipocerveza }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
