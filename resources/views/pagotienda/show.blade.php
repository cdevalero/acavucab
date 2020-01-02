@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pagotienda {{ $pagotienda->codigo_pagotienda }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pagotienda') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pagotienda/' . $pagotienda->codigo_pagotienda . '/edit') }}" title="Edit pagotienda"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('pagotienda' . '/' . $pagotienda->codigo_pagotienda) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pagotienda" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pagotienda->codigo_pagotienda }}</td>
                                    </tr>
                                    <tr><th> Monto </th><td> {{ $pagotienda->monto }} </td></tr><tr><th> Fk Pagotienda Efectivo </th><td> {{ $pagotienda->fk_pagotienda_efectivo }} </td></tr><tr><th> Fk Pagotienda Tarjetadebito </th><td> {{ $pagotienda->fk_pagotienda_tarjetadebito }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
