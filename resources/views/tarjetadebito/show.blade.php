@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">tarjetadebito {{ $tarjetadebito->codigo_tarjetadebito }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tarjetadebito') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/tarjetadebito/' . $tarjetadebito->codigo_tarjetadebito . '/edit') }}" title="Edit tarjetadebito"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('tarjetadebito' . '/' . $tarjetadebito->codigo_tarjetadebito) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete tarjetadebito" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tarjetadebito->codigo_tarjetadebito }}</td>
                                    </tr>
                                    <tr><th> Numero Tarjetadebito </th><td> {{ $tarjetadebito->numero_tarjetadebito }} </td></tr><tr><th> Fk Tarjetadebito Banco </th><td> {{ $tarjetadebito->fk_tarjetadebito_banco }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
