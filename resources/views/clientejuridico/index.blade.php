@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Clientejuridico</div>
                    <div class="card-body">

                        @if (Auth::user())
                            @if (Auth::user()->permiso('clinetejuridicoC'))
                            <a href="{{ url('/clientejuridico/create') }}" class="btn btn-success btn-sm" title="Add New clientejuridico">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            @endif
                        @endif
                        
                        <form method="GET" action="{{ url('/clientejuridico') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Rif</th><th>Denominacion Comercial</th><th>Razon Social</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clientejuridico as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->rif }}</td><td>{{ $item->denominacion_comercial }}</td><td>{{ $item->razon_social }}</td>
                                        <td>
                                            <a href="{{ url('/clientejuridico/' . $item->codigo_clientejuridico) }}" title="View clientejuridico"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            
                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('clinetejuridicoU'))
                                                    <a href="{{ url('/clientejuridico/' . $item->codigo_clientejuridico . '/edit') }}" title="Edit clientejuridico"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                @endif
                                            @endif
                                            
                                            @if (Auth::user())
                                                @if (Auth::user()->permiso('clinetejuridicoD'))
                                                    <form method="POST" action="{{ url('/clientejuridico' . '/' . $item->codigo_clientejuridico) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete clientejuridico" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>                                             
                                                @endif
                                            @endif
                                            

                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $clientejuridico->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
