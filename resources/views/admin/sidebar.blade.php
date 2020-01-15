<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <h3>Administrar</h3>
        </div>

        

        <div class="card-body">

            @if (Auth::user())
                @if (Auth::user()->permiso('total'))
                    
                @endif
            @endif

            @if (Auth::user())
                @if (Auth::user()->permiso('manejar_productos_configuracion'))
                    <div class="dropdown dropright">
                    <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown"
                    >
                        Productos
                    </button>
                    <div class="dropdown-menu">
                    @if (Auth::user())
                        @if (Auth::user()->permiso('cervezaCRUD'))
                            <a class="dropdown-item" href="cerveza">Cerveza</a>
                        @endif
                    @endif
                    @if (Auth::user())
                            @if (Auth::user()->permiso('eventoCRUD'))
                                <a class="dropdown-item" href="evento">Evento</a>
                            @endif
                    @endif
                    @if (Auth::user())
                        @if (Auth::user()->permiso('entradaCRUD'))
                            <a class="dropdown-item" href="entrada">entrada</a>
                        @endif
                    @endif
                    </div>
                    </div>
                @endif
            @endif        

            <br>

            @if (Auth::user())
                @if (Auth::user()->permiso('manejar_empleados_configuracion'))
                    <div class="dropdown dropright">
                    <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown"
                    >
                        URP
                    </button>
                    <div class="dropdown-menu">
                    @if (Auth::user())
                            @if (Auth::user()->permiso('usuarioCRUD'))
                            <a class="dropdown-item" href="usuario">Usuarios</a>
                            @endif
                    @endif
                    @if (Auth::user())
                            @if (Auth::user()->permiso('privilegioCRUD'))
                                <a class="dropdown-item" href="privilegio">Privilegio</a>
                            @endif
                    @endif
                    @if (Auth::user())
                            @if (Auth::user()->permiso('rolCRUD'))
                                <a class="dropdown-item" href="rol">rol</a>
                            @endif
                    @endif
                    @if (Auth::user())
                            @if (Auth::user()->permiso('rol_privilegioCRUD'))
                                <a class="dropdown-item" href="rol_privilegio">Privilegio - roles</a>
                            @endif
                    @endif
                        
                    </div>
                    </div>
                @endif
            @endif

            

            <br>

            @if (Auth::user())
                @if (Auth::user()->permiso('manejar_clientes_configuracion'))
                    <div class="dropdown dropright">
                    <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown"
                    >
                        Clientes
                    </button>
                    <div class="dropdown-menu">
                        @if (Auth::user())
                            @if (Auth::user()->permiso('clientenaturalCRUD'))
                            <a class="dropdown-item" href="clientenatural">Persona Natural</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('clinetejuridicoCRUD'))
                            <a class="dropdown-item" href="clientejuridico">Persona Juridica</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('proveedorCRUD'))
                                <a class="dropdown-item" href="proveedor">Proveedores</a>
                            @endif
                        @endif
 
                    </div>
                    </div>
                @endif
            @endif

            


            

            <br>

            @if (Auth::user())
                @if (Auth::user()->permiso('presupuestoCRUD'))
                    <div class="dropdown dropright">
                    <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown"
                    >
                        Presupuestos
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="presupuesto">Presupuestos</a>
                    </div>
                    </div>
                @endif
            @endif



            <br>
            <br>

            @if (Auth::user())
                @if (Auth::user()->permiso('manejar_otros_CRUD'))
                    <div class="dropdown">
                    <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown"
                    >
                        Otros
                    </button>
                    <div class="dropdown-menu">
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="privilegio">Privilegio</a>
                            @endif
                        @endif
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="actividad">Actividad</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="estatus">Estatus</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="estatuspago">Estatus Pago</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="banco">Bancos</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="puntocompra">Punto Compra</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="tasacambiaria">Tasa Cambiaria</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="puntovalor">Punto Valor</a>
                            @endif
                        @endif

                        @if (Auth::user())
                        @if (Auth::user()->permiso('tipocervezaCRUD'))
                            <a class="dropdown-item" href="tipocerveza">Tipo cerveza</a>
                        @endif
                    @endif
                    @if (Auth::user())
                        @if (Auth::user()->permiso('caracteristicasCRUD'))
                            <a class="dropdown-item" href="caracteristicas">Caracteristicas de cerveza</a>
                        @endif
                    @endif
                    @if (Auth::user())
                        @if (Auth::user()->permiso('almacenCRUD'))
                            <a class="dropdown-item" href="almacen">Almacen</a>
                        @endif
                    @endif
                    @if (Auth::user())
                        @if (Auth::user()->permiso('anaquelCRUD'))
                            <a class="dropdown-item" href="anaquel">Anaquel</a>
                        @endif
                    @endif
                    @if (Auth::user())
                        @if (Auth::user()->permiso('pasilloCRUD'))
                            <a class="dropdown-item" href="pasillo">Pasillo</a>
                        @endif
                    @endif
                    @if (Auth::user())
                        @if (Auth::user()->permiso('ingredienteCRUD'))
                            <a class="dropdown-item" href="ingrediente">Ingredientes</a>
                        @endif
                    @endif
                    @if (Auth::user())
                        @if (Auth::user()->permiso('pasopreparacionCRUD'))
                            <a class="dropdown-item" href="pasopreparacion">Preparacion</a>
                        @endif
                    @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="tipocerveza_ingrediente">Ingrediente - Cerveza</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="monedaextranjera">Divisas</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="lugar">Lugares</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="tienda">Tienda</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="evento">Evento</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="inventarioarticulo">Inventario de articulos</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="tarjetacredito">Tarjetas de Credito</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                                <a class="dropdown-item" href="tarjetadebito">Targetas de Debito</a>
                            @endif
                        @endif
                        
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                            <a class="dropdown-item" href="cheque">cheque</a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                            <a class="dropdown-item" href="empleado">Empleados</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                            <a class="dropdown-item" href="horario">Horarios</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                            <a class="dropdown-item" href="empleado_horario">Horarios de empleados</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                            <a class="dropdown-item" href="beneficio">Beneficios</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('total'))
                            <a class="dropdown-item" href="falta">Faltas</a>
                            @endif
                        @endif

                        @if (Auth::user())
                            @if (Auth::user()->permiso('afiliacion_estatuspagoCRUD'))
                                <a class="dropdown-item" href="afiliacion_estatuspago">Estatus de pago: Afiliaciones</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('transferenciaCRUD'))
                                <a class="dropdown-item" href="transferencia">transferencia</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('compraCRUD'))
                                <a class="dropdown-item" href="compra">Compras</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('pagowebCRUD'))
                                <a class="dropdown-item" href="pagoweb">Pagos WEB</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('emailCRUD'))
                                <a class="dropdown-item" href="email">email</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('efectivoCRUD'))
                                <a class="dropdown-item" href="efectivo">efectivo</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('tasa_monedaextranjeraCRUD'))
                                <a class="dropdown-item" href="tasa_monedaextranjera">Tasa moneda extranjera</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('puntoventaCRUD'))
                                <a class="dropdown-item" href="puntoventa">Punto Venta</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('pagoweb_puntoventaCRUD'))
                                <a class="dropdown-item" href="pagoweb_puntoventa">pago web - punto venta</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('telefonoCRUD'))
                                <a class="dropdown-item" href="telefono">Telefonos</a>
                            @endif
                        @endif



                        @if (Auth::user())
                            @if (Auth::user()->permiso('cargoCRUD'))
                                <a class="dropdown-item" href="cargo">cargo</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('empleado_beneficioCRUD'))
                                <a class="dropdown-item" href="empleado_beneficio">empleado beneficio</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('comntarioCRUD'))
                                <a class="dropdown-item" href="comentario">Comentarios</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('detalle_compraCRUD'))
                                <a class="dropdown-item" href="detalle_compra">detalle Compra</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('imagencervezaCRUD'))
                                <a class="dropdown-item" href="imagencerveza">imagenCerveza</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('vacacionCRUD'))
                                <a class="dropdown-item" href="vacacion">vacaciones</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('ventaCRUD'))
                                <a class="dropdown-item" href="venta">Ventas</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('estatus_conexCRUD'))
                                <a class="dropdown-item" href="estatus_conex">estatus conexe</a>
                            @endif
                        @endif
                        


                        @if (Auth::user())
                            @if (Auth::user()->permiso('punto_puntovalorCRUD'))
                                <a class="dropdown-item" href="punto_puntovalor">PuntoPunto Valor</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('detalleventaCRUD'))
                                <a class="dropdown-item" href="detalleventa">detalles de venta</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('revistaCRUD'))
                                <a class="dropdown-item" href="revista">revista</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('revista_cervezaCRUD'))
                                <a class="dropdown-item" href="revista_cerveza">revista cerveza</a>
                            @endif
                        @endif
                        @if (Auth::user())
                            @if (Auth::user()->permiso('pagotiendaCRUD'))
                                <a class="dropdown-item" href="pagotienda">Pago en Tienda</a>
                            @endif
                        @endif

                        

                    </div>
                    </div>
                @endif
            @endif

            

        </div>
    </div>
</div>
