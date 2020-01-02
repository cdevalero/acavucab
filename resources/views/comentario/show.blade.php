@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">comentario {{ $comentario->codigo_comentario }}</div>
                    <div class="card-body">

                        <a href="{{ url('/comentario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/comentario/' . $comentario->codigo_comentario . '/edit') }}" title="Edit comentario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('comentario' . '/' . $comentario->codigo_comentario) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete comentario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $comentario->codigo_comentario }}</td>
                                    </tr>
                                    <tr><th> Calificacion </th><td> {{ $comentario->calificacion }} </td></tr><tr><th> Descripcion </th><td> {{ $comentario->descripcion }} </td></tr><tr><th> Fk Comentario Cerveza </th><td> {{ $comentario->fk_comentario_cerveza }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
