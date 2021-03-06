@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">proveedor_tipocerveza {{ $proveedor_tipocerveza->id_ptc }}</div>
                    <div class="card-body">

                        <a href="{{ url('/proveedor_tipocerveza') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/proveedor_tipocerveza/' . $proveedor_tipocerveza->id_ptc . '/edit') }}" title="Edit proveedor_tipocerveza"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('proveedor_tipocerveza' . '/' . $proveedor_tipocerveza->id_ptc) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete proveedor_tipocerveza" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $proveedor_tipocerveza->id_ptc }}</td>
                                    </tr>
                                    <tr><th> Fk Ptc Proveedor </th><td> {{ $proveedor_tipocerveza->fk_ptc_proveedor }} </td></tr><tr><th> Fk Ptc Tipocerveza </th><td> {{ $proveedor_tipocerveza->fk_ptc_tipocerveza }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
