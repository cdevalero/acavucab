@extends('supervisorview')
@section('base')
    <form action="{{url('/tipoMasVendidoView')}}" method="post">
        @csrf
        <input type="date" name=":inicio" id=":inicio" required>
        <input type="date" name=":fin" id=":fin" required>
        <button type="submit">Enviar</button>
    </form>
    {{$tipoMasVendido->render()}}
@endsection