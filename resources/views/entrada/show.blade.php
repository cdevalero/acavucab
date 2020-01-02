@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">entrada {{ $entrada->codigo_entrada }}</div>
                    <div class="card-body">

                        <a href="{{ url('/entrada') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/entrada/' . $entrada->codigo_entrada . '/edit') }}" title="Edit entrada"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('entrada' . '/' . $entrada->codigo_entrada) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete entrada" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $entrada->codigo_entrada }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $entrada->nombre }} </td></tr><tr><th> Precio </th><td> {{ $entrada->estatus }} </td></tr><tr><th> Tipo </th><td> {{ $entrada->tipo }} </td></tr><tr><th> Fk Entrada Evento </th><td> {{ $entrada->fk_entrada_evento }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
