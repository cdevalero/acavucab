@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">caracteristica {{ $caracteristica->codigo_estilocerveza }}</div>
                    <div class="card-body">

                        <a href="{{ url('/caracteristicas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/caracteristicas/' . $caracteristica->codigo_estilocerveza . '/edit') }}" title="Edit caracteristica"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('caracteristicas' . '/' . $caracteristica->codigo_estilocerveza) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete caracteristica" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $caracteristica->codigo_estilocerveza }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $caracteristica->nombre }} </td></tr><tr><th> Color </th><td> {{ $caracteristica->color }} </td></tr><tr><th> Grado Alcohol </th><td> {{ $caracteristica->grado_alcohol }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
