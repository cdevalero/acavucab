@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">puntoventum {{ $puntoventum->codigo_puntoventa }}</div>
                    <div class="card-body">

                        <a href="{{ url('/puntoventa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/puntoventa/' . $puntoventum->codigo_puntoventa . '/edit') }}" title="Edit puntoventum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('puntoventa' . '/' . $puntoventum->codigo_puntoventa) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete puntoventum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $puntoventum->codigo_puntoventa }}</td>
                                    </tr>
                                    <tr><th> Cantidad </th><td> {{ $puntoventum->cantidad }} </td></tr><tr><th> Fk Puntoventa Puntovalor </th><td> {{ $puntoventum->fk_puntoventa_puntovalor }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
