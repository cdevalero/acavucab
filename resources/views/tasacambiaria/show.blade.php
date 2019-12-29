@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tasacambiarium {{ $tasacambiarium->codigo_tasacambiaria }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tasacambiaria') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/tasacambiaria/' . $tasacambiarium->codigo_tasacambiaria . '/edit') }}" title="Edit tasacambiarium"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('tasacambiaria' . '/' . $tasacambiarium->codigo_tasacambiaria) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tasacambiarium" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tasacambiarium->codigo_tasacambiaria }}</td>
                                    </tr>
                                    <tr><th> Valor </th><td> {{ $tasacambiarium->valor }} </td></tr><tr><th> Fecha </th><td> {{ $tasacambiarium->fecha }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
