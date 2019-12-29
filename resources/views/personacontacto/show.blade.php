@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">personacontacto {{ $personacontacto->codigo_personacontacto }}</div>
                    <div class="card-body">

                        <a href="{{ url('/personacontacto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/personacontacto/' . $personacontacto->codigo_personacontacto . '/edit') }}" title="Edit personacontacto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('personacontacto' . '/' . $personacontacto->codigo_personacontacto) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete personacontacto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $personacontacto->codigo_personacontacto }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $personacontacto->nombre }} </td></tr><tr><th> Apellido </th><td> {{ $personacontacto->apellido }} </td></tr><tr><th> Fk Personacontacto Clientejuridico </th><td> {{ $personacontacto->fk_personacontacto_clientejuridico }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
