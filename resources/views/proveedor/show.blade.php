@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">proveedor {{ $proveedor->codigo_proveedor }}</div>
                    <div class="card-body">

                        <a href="{{ url('/proveedor') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/proveedor/' . $proveedor->codigo_proveedor . '/edit') }}" title="Edit proveedor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('proveedor' . '/' . $proveedor->codigo_proveedor) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete proveedor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $proveedor->codigo_proveedor }}</td>
                                    </tr>
                                    <tr><th> Razon Social </th><td> {{ $proveedor->razon_social }} </td></tr><tr><th> Denominacion Comercial </th><td> {{ $proveedor->denominacion_comercial }} </td></tr><tr><th> Rif </th><td> {{ $proveedor->rif }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
