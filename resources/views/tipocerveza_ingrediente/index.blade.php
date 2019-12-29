@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Tipocerveza_ingrediente</div>
                    <div class="card-body">
                        <a href="{{ url('/tipocerveza_ingrediente/create') }}" class="btn btn-success btn-sm" title="Add New tipocerveza_ingrediente">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/tipocerveza_ingrediente') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Cantidad</th><th>Peso</th><th>Tiempo Agregar</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tipocerveza_ingrediente as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->cantidad }}</td><td>{{ $item->peso }}</td><td>{{ $item->tiempo_agregar }}</td>
                                        <td>
                                            <a href="{{ url('/tipocerveza_ingrediente/' . $item->id_ti) }}" title="View tipocerveza_ingrediente"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/tipocerveza_ingrediente/' . $item->id_ti . '/edit') }}" title="Edit tipocerveza_ingrediente"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/tipocerveza_ingrediente' . '/' . $item->id_ti) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete tipocerveza_ingrediente" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $tipocerveza_ingrediente->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
