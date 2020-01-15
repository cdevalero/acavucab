@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Cerveza</div>
                    <div class="card-body">

                        @if (Auth::user())
                            @if (Auth::user()->permiso('cervezaC'))
                            <a href="{{ url('/cerveza/create') }}" class="btn btn-success btn-sm" title="Add New cerveza">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            @endif
                        @endif

                        <form method="GET" action="{{ url('/cerveza') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Nombre</th><th>Precio</th><th>Historia</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cerveza as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->precio }}</td><td>{{ $item->historia }}</td>
                                        <td>
                                            <a href="{{ url('/cerveza/' . $item->codigo_cerveza) }}" title="View cerveza"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('cervezaU'))
                                                    <a href="{{ url('/cerveza/' . $item->codigo_cerveza . '/edit') }}" title="Edit cerveza"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                @endif
                                            @endif
                                            
                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('cervezaD'))
                                                <form method="POST" action="{{ url('/cerveza' . '/' . $item->codigo_cerveza) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete cerveza" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>                                               
                                                @endif
                                            @endif


                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $cerveza->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
