@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" toggle="collapse" target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">

                @if (Auth::user()->permiso('diarioReporteView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="diarioReporteView">Diario</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('empleados_faltasView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="empleados_faltasView">Faltas</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('fichaProveedoresView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="fichaProveedoresView">Ficha de Provedores</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('ordenesView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="ordenesView">Ordenes</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('tipoMasVendidoView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="tipoMasVendidoView">Top Ventas</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('top5cervezasView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="top5cervezasView">Top 5 Cervezas</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('top10cervezasView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="top10cervezasView">Top 10 Cervezas</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('top10clientesView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="top10clientesView">Top 10 clientes</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('totalpuntosView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="totalpuntosView">Total Puntos</a>
                    </li>
                @endif
                
                @if (Auth::user()->permiso('movinventariosView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="movinventariosView">Movimientos</a>
                    </li>
                @endif
                
               <ul>
               @if (Auth::user()->permiso('ordenesFacturasView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="ordenesFacturasView">Ordenes y Facturas</a>
                    </li>
                @endif

                @if (Auth::user()->permiso('asistenciaView'))
                    <li class="nav-item active">
                        <a class="nav-link" href="asistenciaView">Asistencia</a>
                    </li>
                @endif
               </ul>

            </ul>
        </div>
    </nav>
    <main class="py-4">
            @yield('base')
    </main>
@endsection