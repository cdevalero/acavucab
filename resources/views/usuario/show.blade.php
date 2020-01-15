@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">usuario {{ $usuario->codigo_usuario }}</div>
                    <div class="card-body">

                        <a href="{{ url('/usuario') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                        @if (Auth::user())
                            @if (Auth::user()->permiso('usuarioU'))
                                <a href="{{ url('/usuario/' . $usuario->codigo_usuario . '/edit') }}" title="Edit usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('usuarioD'))
                                <form method="POST" action="{{ url('usuario' . '/' . $usuario->codigo_usuario) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete usuario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @endif
                        @endif

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $usuario->codigo_usuario }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $usuario->nombre }} </td></tr><tr><th> password </th><td> {{ $usuario->password }} </td></tr><tr><th> Fk Usuario Rol </th><td> {{ $usuario->fk_usuario_rol }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
