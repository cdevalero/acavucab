@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">revista_cerveza {{ $revista_cerveza->id_rc }}</div>
                    <div class="card-body">

                        <a href="{{ url('/revista_cerveza') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/revista_cerveza/' . $revista_cerveza->id_rc . '/edit') }}" title="Edit revista_cerveza"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('revista_cerveza' . '/' . $revista_cerveza->id_rc) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete revista_cerveza" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $revista_cerveza->id_rc }}</td>
                                    </tr>
                                    <tr><th> Fk Rc Revista </th><td> {{ $revista_cerveza->fk_rc_revista }} </td></tr><tr><th> Fk Rc Cerveza </th><td> {{ $revista_cerveza->fk_rc_cerveza }} </td></tr><tr><th> Porcentaje Descuento </th><td> {{ $revista_cerveza->porcentaje_descuento }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
