@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Usuario</div>
                    <div class="card-body">

                    @if (Auth::user())
                        @if (Auth::user()->permiso('usuarioC'))
                        <a href="{{ url('/usuario/create') }}" class="btn btn-success btn-sm" title="Add New usuario">
                            <i class="fa fa-plus" aria-hidden="true"></i> Crear
                        </a>
                        @endif
                    @endif

                        <form method="GET" action="{{ url('/usuario') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Fk Usuario Rol</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($usuario as $item)
                                    <tr>
                                        <td>{{ $item->codigo_usuario }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->fk_usuario_rol }}</td>
                                        <td>
                                            <a href="{{ url('/usuario/' . $item->codigo_usuario) }}" title="View usuario"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            
                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('usuarioU'))
                                                    <a href="{{ url('/usuario/' . $item->codigo_usuario . '/edit') }}" title="Edit usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                                @endif
                                            @endif

                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('usuarioD'))
                                                <form method="POST" action="{{ url('/usuario' . '/' . $item->codigo_usuario) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete usuario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                                </form>                                                
                                                @endif
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $usuario->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
