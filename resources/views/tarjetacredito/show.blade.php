@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tarjetacredito {{ $tarjetacredito->codigo_tarjetacredito }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tarjetacredito') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/tarjetacredito/' . $tarjetacredito->codigo_tarjetacredito . '/edit') }}" title="Edit tarjetacredito"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('tarjetacredito' . '/' . $tarjetacredito->codigo_tarjetacredito) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tarjetacredito" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tarjetacredito->codigo_tarjetacredito }}</td>
                                    </tr>
                                    <tr><th> Numero Tarjetacredito </th><td> {{ $tarjetacredito->numero_tarjetacredito }} </td></tr><tr><th> Tipo </th><td> {{ $tarjetacredito->tipo }} </td></tr><tr><th> Fk Tarjetacredito Banco </th><td> {{ $tarjetacredito->fk_tarjetacredito_banco }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
