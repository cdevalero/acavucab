@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tasa_monedaextranjera {{ $tasa_monedaextranjera->id_tm }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tasa_monedaextranjera') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/tasa_monedaextranjera/' . $tasa_monedaextranjera->id_tm . '/edit') }}" title="Edit tasa_monedaextranjera"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('tasa_monedaextranjera' . '/' . $tasa_monedaextranjera->id_tm) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tasa_monedaextranjera" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tasa_monedaextranjera->id_tm }}</td>
                                    </tr>
                                    <tr><th> Fk Tm Tasacambiaria </th><td> {{ $tasa_monedaextranjera->fk_tm_tasacambiaria }} </td></tr><tr><th> Fk Tm Monedaextranjera </th><td> {{ $tasa_monedaextranjera->fk_tm_monedaextranjera }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
