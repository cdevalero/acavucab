
@extends('supervisorview')

@section('base')
    <form action="{{url('/top10cervezasView')}}" method="post">
        @csrf
        <input type="date" name=":inicio" id=":inicio" required>
        <input type="date" name=":fin" id=":fin" required>
        <button type="submit">Enviar</button>
    </form>
    {{$top10cervezas->render()}}
@endsection