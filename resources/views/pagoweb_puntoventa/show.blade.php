@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">pagoweb_puntoventum {{ $pagoweb_puntoventum->id_pwpv }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pagoweb_puntoventa') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pagoweb_puntoventa/' . $pagoweb_puntoventum->id_pwpv . '/edit') }}" title="Edit pagoweb_puntoventum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('pagoweb_puntoventa' . '/' . $pagoweb_puntoventum->id_pwpv) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete pagoweb_puntoventum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pagoweb_puntoventum->id_pwpv }}</td>
                                    </tr>
                                    <tr><th> Fk Pwpv Pagoweb </th><td> {{ $pagoweb_puntoventum->fk_pwpv_pagoweb }} </td></tr><tr><th> Fk Pwpv Puntoventa </th><td> {{ $pagoweb_puntoventum->fk_pwpv_puntoventa }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
