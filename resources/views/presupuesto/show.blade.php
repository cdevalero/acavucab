@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">presupuesto {{ $presupuesto->codigo_presupuesto }}</div>
                    <div class="card-body">

                        <a href="{{ url('/presupuesto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('presupuestoU'))
                                <a href="{{ url('/presupuesto/' . $presupuesto->codigo_presupuesto . '/edit') }}" title="Edit presupuesto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('presupuestoD'))
                                <form method="POST" action="{{ url('presupuesto' . '/' . $presupuesto->codigo_presupuesto) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete presupuesto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @endif
                        @endif
                        

                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $presupuesto->codigo_presupuesto }}</td>
                                    </tr>
                                    <tr><th> Fecha </th><td> {{ $presupuesto->fecha }} </td></tr><tr><th> Total </th><td> {{ $presupuesto->total }} </td></tr><tr><th> Fk Presupuesto Clientejuridico </th><td> {{ $presupuesto->fk_presupuesto_clientejuridico }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
