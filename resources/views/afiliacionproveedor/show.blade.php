@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">afiliacionproveedor {{ $afiliacionproveedor->codigo_afiliacionproveedor }}</div>
                    <div class="card-body">

                        <a href="{{ url('/afiliacionproveedor') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                       
                        @if (Auth::user())
                            @if (Auth::user()->permiso('privilegioU'))
                                <a href="{{ url('/afiliacionproveedor/' . $afiliacionproveedor->codigo_afiliacionproveedor . '/edit') }}" title="Edit afiliacionproveedor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('privilegioD'))
                                <form method="POST" action="{{ url('afiliacionproveedor' . '/' . $afiliacionproveedor->codigo_afiliacionproveedor) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete afiliacionproveedor" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            @endif
                        @endif
                       

                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $afiliacionproveedor->codigo_afiliacionproveedor }}</td>
                                    </tr>
                                    <tr><th> Fecha Afiliacion </th><td> {{ $afiliacionproveedor->fecha_afiliacion }} </td></tr><tr><th> Costo Afiliacion </th><td> {{ $afiliacionproveedor->costo_afiliacion }} </td></tr><tr><th> Fk Afiliacionproveedor Proveedor </th><td> {{ $afiliacionproveedor->fk_afiliacionproveedor_proveedor }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
