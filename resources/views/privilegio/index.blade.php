@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Privilegio</div>
                    <div class="card-body">

                        @if (Auth::user())
                            @if (Auth::user()->permiso('privilegioC'))
                            <a href="{{ url('/privilegio/create') }}" class="btn btn-success btn-sm" title="Add New privilegio">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            @endif
                        @endif 

                        

                        <form method="GET" action="{{ url('/privilegio') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Nombre</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($privilegio as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>
                                            <a href="{{ url('/privilegio/' . $item->codigo_privilegio) }}" title="View privilegio"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            
                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('privilegioU'))
                                                    <a href="{{ url('/privilegio/' . $item->codigo_privilegio . '/edit') }}" title="Edit privilegio"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                @endif
                                            @endif
                                            
                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('privilegioD'))
                                                    <form method="POST" action="{{ url('/privilegio' . '/' . $item->codigo_privilegio) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete privilegio" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>                                               
                                                @endif
                                            @endif

                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $privilegio->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
