@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">rol_privilegio {{ $rol_privilegio->id_rp }}</div>
                    <div class="card-body">

                        <a href="{{ url('/rol_privilegio') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('rol_privilegioU'))
                                <a href="{{ url('/rol_privilegio/' . $rol_privilegio->id_rp . '/edit') }}" title="Edit rol_privilegio"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('rol_privilegioD'))
                                <form method="POST" action="{{ url('rol_privilegio' . '/' . $rol_privilegio->id_rp) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete rol_privilegio" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @endif
                        @endif
                        

                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $rol_privilegio->id_rp }}</td>
                                    </tr>
                                    <tr><th> Fk Rp Rol </th><td> {{ $rol_privilegio->fk_rp_rol }} </td></tr><tr><th> Fk Rp Privilegio </th><td> {{ $rol_privilegio->fk_rp_privilegio }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
