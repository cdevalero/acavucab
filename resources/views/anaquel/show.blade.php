@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">anaquel {{ $anaquel->codigo_anaquel }}</div>
                    <div class="card-body">

                        <a href="{{ url('/anaquel') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/anaquel/' . $anaquel->codigo_anaquel . '/edit') }}" title="Edit anaquel"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('anaquel' . '/' . $anaquel->codigo_anaquel) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete anaquel" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $anaquel->codigo_anaquel }}</td>
                                    </tr>
                                    <tr><th> Producto Disponible </th><td> {{ $anaquel->producto_disponible }} </td></tr><tr><th> Fk Anaquel Pasillo </th><td> {{ $anaquel->fk_anaquel_pasillo }} </td></tr><tr><th> Fk Anaquel Empleado </th><td> {{ $anaquel->fk_anaquel_empleado }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
