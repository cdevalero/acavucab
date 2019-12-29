@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">afiliacion_estatuspago {{ $afiliacion_estatuspago->aep }}</div>
                    <div class="card-body">

                        <a href="{{ url('/afiliacion_estatuspago') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/afiliacion_estatuspago/' . $afiliacion_estatuspago->aep . '/edit') }}" title="Edit afiliacion_estatuspago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('afiliacion_estatuspago' . '/' . $afiliacion_estatuspago->aep) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete afiliacion_estatuspago" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $afiliacion_estatuspago->aep }}</td>
                                    </tr>
                                    <tr><th> Fecha </th><td> {{ $afiliacion_estatuspago->fecha }} </td></tr><tr><th> Fk Aep Afiliacionproveedor </th><td> {{ $afiliacion_estatuspago->fk_aep_afiliacionproveedor }} </td></tr><tr><th> Fk Aep Estatuspago </th><td> {{ $afiliacion_estatuspago->fk_aep_estatuspago }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
