@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">evento {{ $evento->codigo_evento }}</div>
                    <div class="card-body">

                        <a href="{{ url('/evento') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('eventoU'))
                                <a href="{{ url('/evento/' . $evento->codigo_evento . '/edit') }}" title="Edit evento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('eventoD'))
                                <form method="POST" action="{{ url('evento' . '/' . $evento->codigo_evento) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete evento" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @endif
                        @endif
                        

                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $evento->codigo_evento }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $evento->nombre }} </td></tr><tr><th> Fecha Inicio </th><td> {{ $evento->fecha_inicio }} </td></tr><tr><th> Fecha Fin </th><td> {{ $evento->fecha_fin }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
