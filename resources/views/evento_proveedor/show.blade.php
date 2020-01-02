@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">evento_proveedor {{ $evento_proveedor->id_ep }}</div>
                    <div class="card-body">

                        <a href="{{ url('/evento_proveedor') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/evento_proveedor/' . $evento_proveedor->id_ep . '/edit') }}" title="Edit evento_proveedor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('evento_proveedor' . '/' . $evento_proveedor->id_ep) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete evento_proveedor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $evento_proveedor->id_ep }}</td>
                                    </tr>
                                    <tr><th> Fk Ep Evento </th><td> {{ $evento_proveedor->fk_ep_evento }} </td></tr><tr><th> Fk Ep Proveedor </th><td> {{ $evento_proveedor->fk_ep_proveedor }} </td></tr><tr><th> Fk Ep Actividad </th><td> {{ $evento_proveedor->fk_ep_actividad }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
