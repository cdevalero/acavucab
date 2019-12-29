@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">email {{ $email->codigo_email }}</div>
                    <div class="card-body">

                        <a href="{{ url('/email') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/email/' . $email->codigo_email . '/edit') }}" title="Edit email"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('email' . '/' . $email->codigo_email) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete email" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $email->codigo_email }}</td>
                                    </tr>
                                    <tr><th> Direccion </th><td> {{ $email->direccion }} </td></tr><tr><th> Fk Email Proveedor </th><td> {{ $email->fk_email_proveedor }} </td></tr><tr><th> Fk Email Clientejuridico </th><td> {{ $email->fk_email_clientejuridico }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
