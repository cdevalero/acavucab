@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">clientenatural {{ $clientenatural->codigo_clientenatural }}</div>
                    <div class="card-body">

                        <a href="{{ url('/clientenatural') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('clientenaturalU'))
                                <a href="{{ url('/clientenatural/' . $clientenatural->codigo_clientenatural . '/edit') }}" title="Edit clientenatural"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('clientenaturalD'))
                                <form method="POST" action="{{ url('clientenatural' . '/' . $clientenatural->codigo_clientenatural) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete clientenatural" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @endif
                        @endif
                        

                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $clientenatural->codigo_clientenatural }}</td>
                                    </tr>
                                    <tr><th> Rif </th><td> {{ $clientenatural->rif }} </td></tr><tr><th> Nombre </th><td> {{ $clientenatural->nombre }} </td></tr><tr><th> Apellido </th><td> {{ $clientenatural->apellido }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
