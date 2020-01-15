@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">cerveza {{ $cerveza->codigo_cerveza }}</div>
                    <div class="card-body">

                        <a href="{{ url('/cerveza') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('cervezaU'))
                                <a href="{{ url('/cerveza/' . $cerveza->codigo_cerveza . '/edit') }}" title="Edit cerveza"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('cervezaD'))
                                <form method="POST" action="{{ url('cerveza' . '/' . $cerveza->codigo_cerveza) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete cerveza" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @endif
                        @endif
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $cerveza->codigo_cerveza }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $cerveza->nombre }} </td></tr><tr><th> Precio </th><td> {{ $cerveza->precio }} </td></tr><tr><th> Historia </th><td> {{ $cerveza->historia }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
