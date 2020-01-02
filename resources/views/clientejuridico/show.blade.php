@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">clientejuridico {{ $clientejuridico->codigo_clientejuridico }}</div>
                    <div class="card-body">

                        <a href="{{ url('/clientejuridico') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/clientejuridico/' . $clientejuridico->codigo_clientejuridico . '/edit') }}" title="Edit clientejuridico"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('clientejuridico' . '/' . $clientejuridico->codigo_clientejuridico) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete clientejuridico" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $clientejuridico->codigo_clientejuridico }}</td>
                                    </tr>
                                    <tr><th> Rif </th><td> {{ $clientejuridico->rif }} </td></tr><tr><th> Denominacion Comercial </th><td> {{ $clientejuridico->denominacion_comercial }} </td></tr><tr><th> Razon Social </th><td> {{ $clientejuridico->razon_social }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
