@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Proveedor_tipocerveza</div>
                    <div class="card-body">
                        <a href="{{ url('/proveedor_tipocerveza/create') }}" class="btn btn-success btn-sm" title="Add New proveedor_tipocerveza">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/proveedor_tipocerveza') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Fk Ptc Proveedor</th><th>Fk Ptc Tipocerveza</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($proveedor_tipocerveza as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fk_ptc_proveedor }}</td><td>{{ $item->fk_ptc_tipocerveza }}</td>
                                        <td>
                                            <a href="{{ url('/proveedor_tipocerveza/' . $item->id_ptc) }}" title="View proveedor_tipocerveza"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/proveedor_tipocerveza/' . $item->id_ptc . '/edit') }}" title="Edit proveedor_tipocerveza"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/proveedor_tipocerveza' . '/' . $item->id_ptc) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete proveedor_tipocerveza" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $proveedor_tipocerveza->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
