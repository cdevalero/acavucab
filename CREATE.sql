CREATE TABLE rol(
    codigo_rol                          SERIAl,
    nombre                              VARCHAR(20) NOT NULL,
    
    
    CONSTRAINT PK_rol PRIMARY KEY (codigo_rol)
);

CREATE TABLE privilegio (
    codigo_privilegio                   SERIAL,
    nombre                              VARCHAR(50) NOT NULL,
    
    
    CONSTRAINT PK_privilegio PRIMARY KEY (codigo_privilegio)
);

CREATE TABLE actividad(
    codigo_actividad                    SERIAL,
    nombre                              VARCHAR(40) NOT NULL,
    tipo                                VARCHAR(40) NOT NULL,
    fecha_actividad                     TIMESTAMP NOT NULL,
    descripcion                         VARCHAR(80) NOT NULL,
    CONSTRAINT PK_actividad PRIMARY KEY (codigo_actividad)
);

CREATE TABLE estatus(
    codigo_estatus                       SERIAl,
    nombre                              VARCHAR(20) NOT NULL,
    
    
    CONSTRAINT PK_status PRIMARY KEY (codigo_estatus)
);

CREATE TABLE estatusPago(
    codigo_estatusPago                 SERIAL,
    nombre                             VARCHAR(20) NOT NULl,
    
    
    CONSTRAINT PK_estatusPago PRIMARY KEY (codigo_estatusPago)
);

CREATE TABLE banco(
    codigo_banco                        SERIAL,
    nombre                              VARCHAR(20) NOT NULL,
    codigo_cuenta                       Numeric(30) NOT NULL, /*UNIQUE*/
    codigo_cheque                       Numeric(30) NOT NULL, /*UNIQUE*/
    
    
    CONSTRAINT PK_banco PRIMARY KEY (codigo_banco)
);

 CREATE TABLE tasaCambiaria(
    codigo_tasaCambiaria                SERIAL,
    valor                               Numeric(15,2) NOT NULL,
    fecha                               DATE,
    
    
    CONSTRAINT PK_tasaCambiaria PRIMARY KEY (codigo_tasaCambiaria)
);

CREATE TABLE puntoCompra (
    codigo_puntoCompra                  SERIAL,
    cantidad                            Numeric(20) NOT NULL,
    
    
    CONSTRAINT PK_puntoCompra PRIMARY KEY (codigo_puntoCompra)
);

CREATE TABLE beneficio(
    codigo_beneficio                    SERIAL,
    nombre                              VARCHAR(20) NOT NULL,
    monto                               Numeric(15,2),
    
    
    CONSTRAINT PK_beneficio PRIMARY KEY (codigo_beneficio)
);

CREATE TABLE puntoValor(
    codigo_puntoValor                   SERIAL,
    fecha                               DATE,
    valor                               Numeric(15,2) NOT NULL,
    
    
    CONSTRAINT PK_puntoValor PRIMARY KEY (codigo_puntoValor)
);

CREATE TABLE tipoCerveza(
    codigo_tipoCerveza                  SERIAL,
    nombre                              VARCHAR(20) NOT NULL,
    descripcion                         TEXT NOT NULL,
    
    
    CONSTRAINT PK_tipoCerveza  PRIMARY KEY (codigo_tipoCerveza) 
);

CREATE TABLE pasoPreparacion(
    codigo_pasoPreparacion             SERIAL,
    numeropado                         INTEGER NOT NULL, 
    descripcionPado                    TEXT,
    FK_pasopreparacio_tipoCerveza     INTEGER NOT NULL,
    
    
    CONSTRAINT PK_pasoPreparacion PRIMARY KEY (codigo_pasoPreparacion),
    CONSTRAINT FK_p_pasopreparacio_tipoCerveza FOREIGN KEY (FK_pasopreparacio_tipoCerveza) REFERENCES tipoCerveza(codigo_tipoCerveza) ON DELETE CASCADE
);


CREATE TABLE efectivo (
    codigo_efectivo                     SERIAL,
    cantidad                            INTEGER NOT NULL,
   
    
    CONSTRAINT PK_efectivo PRIMARY KEY (codigo_efectivo)
);

CREATE TABLE horario(
    codigo_horario                      SERIAL,
    hora_entrada                        TIME,
    hora_salida                         TIME,
    dia                                 INTEGER NOT NULL,
    
    
    CONSTRAINT PK_horario PRIMARY KEY (codigo_horario)
);

 CREATE TABLE ingrediente(
     codigo_ingrediente                 SERIAL,
     nombre                             VARCHAR(40) NOT NULL,
     tipo                               VARCHAR(20) NOT NULL,
     
     
     CONSTRAINT PK_ingrediente PRIMARY KEY (codigo_ingrediente)
 );

CREATE TABLE tipoCerveza_ingrediente(
    id_ti                               SERIAL,
    cantidad                            INTEGER NOT NULL,
    peso                                INTEGER NOT NULL,
    tiempo_agregar                      INTEGER NOT NULL,
    FK_ti_tipoCerveza                   INTEGER NOT NULL,
    FK_ti_ingrediente                   INTEGER NOT NULL,

    
    CONSTRAINT PK_tipoCerveza_ingrediente PRIMARY KEY (id_ti),
    CONSTRAINT FK_ti_ti_tipoCerveza FOREIGN KEY (FK_ti_tipoCerveza) REFERENCES tipoCerveza(codigo_tipoCerveza)ON DELETE CASCADE,
    CONSTRAINT FK_ti_ti_ingrediente FOREIGN KEY (FK_ti_ingrediente) REFERENCES ingrediente(codigo_ingrediente) ON DELETE CASCADE
);

 CREATE TABLE monedaExtranjera(
    codigo_monedaExtranjera              SERIAL,
    tipo                                INTEGER NOT NULL,
    denominacion                        INTEGER NOT NULL,
    numero_billete                      INTEGER NOT NULL,/*Deberia ser varchar*/
    
   
    CONSTRAINT PK_moneda_extranjera PRIMARY KEY (codigo_monedaExtranjera)
);

CREATE TABLE lugar(
    codigo_lugar                        SERIAL,
    nombre                              VARCHAR(80) NOT NULL,
    tipo                                VARCHAR(10) NOT NULL CHECK(tipo IN ('Estado','Municipio','Parroquia')),
    FK_lugar_lugar                      INTEGER,
    
    
    CONSTRAINT PK_lugar PRIMARY KEY (codigo_lugar),
    CONSTRAINT FK_l_lugar_lugar FOREIGN KEY(FK_lugar_lugar)REFERENCES lugar(codigo_lugar)   ON DELETE CASCADE   
);

CREATE TABLE tienda(
    codigo_tienda                        SERIAL,
    rif                                 VARCHAR(40) NOT NULL,
    nombre                              VARCHAR(40) NOT NULL,
    FK_tienda_lugar                     INTEGER NOT NULL,
    
    
    CONSTRAINT PK_tienda PRIMARY KEY (codigo_tienda),
    CONSTRAINT FK_t_tienda_lugar FOREIGN KEY (FK_tienda_lugar) REFERENCES lugar(codigo_lugar)ON DELETE CASCADE
);


CREATE TABLE evento(
    codigo_evento                       SERIAL,
    nombre                              VARCHAR(60) NOT NULL,
    fecha_inicio                        DATE NOT NULL,
    fecha_fin                           DATE NOT NULL,
    FK_evento_lugar                     INTEGER NOT NULL,
    
    
    CONSTRAINT PK_evento PRIMARY KEY (codigo_evento),
    CONSTRAINT FK_e_evento_lugar FOREIGN KEY (codigo_evento) REFERENCES lugar(codigo_lugar)ON DELETE CASCADE
);

CREATE TABLE inventarioArticulo(
    codigo_inventarioArticulo           SERIAL,
    nombre                              VARCHAR(20) NOT NULL,
    cantidad                            INTEGER NOT NULL,
    FK_inventarioArticulo_evento        INTEGER,
    
   
    CONSTRAINT PK_inventarioArticulo PRIMARY KEY (codigo_inventarioArticulo),
    CONSTRAINT FK_i_inventarioArticulo_evento FOREIGN KEY (FK_inventarioArticulo_evento) REFERENCES evento(codigo_evento)ON DELETE CASCADE
);

CREATE TABLE tarjetaCredito(
    codigo_tarjetaCredito               SERIAL,
    numero_tarjetaCredito               Numeric(20) NOT NULL,
    tipo                                VARCHAR(15) NOT NULL,
    FK_tarjetaCredito_banco             INTEGER NOT NULL,
    
    
    CONSTRAINT PK_tarjetaCredito PRIMARY KEY (codigo_tarjetaCredito),
    CONSTRAINT FK_tc_tarjetaCredito FOREIGN KEY (FK_tarjetaCredito_banco) REFERENCES banco(codigo_banco)ON DELETE CASCADE
);

CREATE TABLE tarjetaDebito(
    codigo_tarjetaDebito               SERIAL,
    numero_tarjetaDebito               Numeric(20) NOT NULL,
    FK_tarjetaDebito_banco             INTEGER NOT NULL,
    
    
    CONSTRAINT PK_tarjeta_Debito PRIMARY KEY (codigo_tarjetaDebito),
    CONSTRAINT FK_td_tarjetaDebito_banco FOREIGN KEY (FK_tarjetaDebito_banco) REFERENCES banco(codigo_banco)ON DELETE CASCADE
);

CREATE TABLE entrada(
    codigo_entrada                      SERIAL,
    nombre                              VARCHAR(80) NOT NULL,
    tipo                                VARCHAR(15) NOT NULL,
    FK_entrada_evento                   INTEGER NOT NULL,
    estatus                             INTEGER,  
    
    
    CONSTRAINT PK_entrada PRIMARY KEY (codigo_entrada),
    CONSTRAINT FK_e_entrada_evento FOREIGN KEY (FK_entrada_evento) REFERENCES evento(codigo_evento)ON DELETE CASCADE
);

CREATE TABLE cheque (
    codigo_cheque                       SERIAL,
    numero_cheque                       Numeric(20) NOT NULL,
    FK_cheque_banco                     INTEGER NOT NULL,
    
    
    CONSTRAINT PK_cheque PRIMARY KEY (codigo_cheque),
    CONSTRAINT FK_c_cheque_banco FOREIGN KEY (FK_cheque_banco) REFERENCES banco(codigo_banco)ON DELETE CASCADE
);

CREATE TABLE usuario(
    codigo_usuario                      SERIAL,
    email                               VARCHAR(50) NOT NULL,
    password                            VARCHAR(255) NOT NULL,
    remember_token                      VARCHAR(255),
    FK_usuario_rol                      INTEGER,
    
    
    CONSTRAINT PK_usuario PRIMARY KEY (codigo_usuario),
    CONSTRAINT FK_u_usuario_rol FOREIGN KEY (FK_usuario_rol) REFERENCES rol(codigo_rol)ON DELETE CASCADE
);
/* NOTA: Arco logico con empleado y cliente*/

CREATE TABLE transferencia (
    codigo_transferencia                SERIAL,
    numero_transferencia                INTEGER,
    FK_transferencia_banco              INTEGER NOT NULL,
    
    
    CONSTRAINT PK_transferencia PRIMARY KEY (codigo_transferencia),
    CONSTRAINT FK_t_transferencia_banco FOREIGN KEY (FK_transferencia_banco) REFERENCES banco(codigo_banco)ON DELETE CASCADE
);

CREATE TABLE proveedor(
    codigo_proveedor                    SERIAL,
    razon_social                        VARCHAR(80) NOT NULL,
    denominacion_comercial              VARCHAR(80) NOT NULL,
    rif                                 VARCHAR(40) NOT NULL,
    web                                 VARCHAR(80) NOT NULL,
    FK_proveedorfisico_lugar            INTEGER NOT NULL,
    FK_proveedorfiscal_lugar            INTEGER NOT NULL,
    
    
    CONSTRAINT PK_proveedor PRIMARY KEY (codigo_proveedor),
    CONSTRAINT FK_p_proveedorfiscal_lugar FOREIGN KEY (FK_proveedorfiscal_lugar) REFERENCES lugar (codigo_lugar)ON DELETE CASCADE,
    CONSTRAINT FK_p_proveedorfisico_lugar FOREIGN KEY (FK_proveedorfisico_lugar) REFERENCES lugar (codigo_lugar)ON DELETE CASCADE
);

CREATE TABLE proveedor_tipoCerveza(
    id_ptc                               SERIAL,
    FK_ptc_proveedor                     INTEGER NOT NULL,
    FK_ptc_tipoCerveza                   INTEGER NOT NULL,
    
    
    CONSTRAINT PK_proveedor_tipoCervezas PRIMARY KEY (id_ptc),
    CONSTRAINT FK_ptc_ptc_proveedor FOREIGN KEY (FK_ptc_proveedor) REFERENCES proveedor(codigo_proveedor)ON DELETE CASCADE,
    CONSTRAINT FK_ptc_ptc_tipoCerveza FOREIGN KEY (FK_ptc_tipoCerveza) REFERENCES tipoCerveza(codigo_tipoCerveza)ON DELETE CASCADE
);

CREATE TABLE afiliacionproveedor(
    codigo_afiliacionProveedor          SERIAL,
    fecha_afiliacion                    DATE,
    costo_afiliacion                    Numeric(20,2),
    FK_afiliacionProveedor_proveedor    INTEGER,
    
    
    CONSTRAINT PK_afiliacionproveedor PRIMARY KEY (Codigo_afiliacionProveedor),
    CONSTRAINT FK_ap_afiliacionProveedor_proveedor FOREIGN Key (FK_afiliacionProveedor_proveedor) REFERENCES proveedor(codigo_proveedor)ON DELETE CASCADE
);

CREATE TABLE afiliacion_estatusPago(
    aep                                SERIAL,
    fecha                              DATE,
    FK_eap_afiliacionProveedor         INTEGER NOT NULL,
    FK_aep_estatusPago                 INTEGER NOT NULL,
    
   
    CONSTRAINT PK_afiliacion_estatuspago PRIMARY KEY (aep),
    CONSTRAINT FK_ae_eap_afiliacionProveedor FOREIGN KEY (FK_eap_afiliacionProveedor) REFERENCES afiliacionproveedor(codigo_afiliacionProveedor)ON DELETE CASCADE ,
    CONSTRAINT FK_aep_estatusPago FOREIGN KEY (FK_aep_estatusPago) REFERENCES estatusPago(codigo_estatusPago)ON DELETE CASCADE
); 

CREATE TABLE compra (
    codigo_compra                       SERIAL,
    fecha                               DATE,
    total                               Numeric(15,2),
    FK_compra_proveedor                 INTEGER NOT NULL,
    
    
    CONSTRAINT PK_compra PRIMARY KEY (codigo_compra),
    CONSTRAINT FK_c_compra_proveedor FOREIGN KEY (FK_compra_proveedor) REFERENCES proveedor(codigo_proveedor) ON DELETE CASCADE
);

CREATE TABLE pagoWeb(
    codigo_pagoweb                      SERIAL,
    monto_total                         Numeric(15,2),
    FK_pagoWeb_tarjetaCredito           INTEGER,
    FK_pagoWeb_tarjetaDebito            INTEGER,
    
    
    CONSTRAINT PK_pagoWeb PRIMARY KEY (codigo_pagoweb),
    CONSTRAINT FK_pw_pagoWeb_tarjetaCredito FOREIGN KEY (FK_pagoWeb_tarjetaCredito) REFERENCES tarjetaCredito(codigo_tarjetaCredito)ON DELETE CASCADE,
    CONSTRAINT FK_pw_pagoWeb_tarjetaDebito FOREIGN KEY (FK_pagoWeb_tarjetaDebito) REFERENCES tarjetaDebito(codigo_tarjetaDebito)ON DELETE CASCADE
);

CREATE TABLE clienteNatural(
    codigo_clienteNatural               SERIAL,
    rif                                 VARCHAR(30) NOT NULL,
    numeroCarnet                        INTEGER NOT NULL,
    nombre                              VARCHAR(30) NOT NULL,
    apellido                            VARCHAR(30) NOT NULL,
    cedula                              INTEGER NOT NULL,
    FK_clienteNatural_lugar             INTEGER NOT NULL,
    FK_clienteNatural_usuario           INTEGER NOT NULL,
    
    
    CONSTRAINT PK_clienteNatural PRIMARY KEY (codigo_clienteNatural),
    CONSTRAINT FK_cn_clienteNatural_lugar FOREIGN KEY (FK_clienteNatural_lugar) REFERENCES lugar(codigo_lugar)ON DELETE CASCADE,
    CONSTRAINT FK_cn_clienteNatural_usuario FOREIGN KEY (FK_clienteNatural_usuario) REFERENCES usuario(codigo_usuario)ON DELETE CASCADE
);


CREATE TABLE clienteJuridico(
    codigo_clienteJuridico              SERIAL,
    rif                                 VARCHAR(30) NOT NULL,
    denominacion_comercial              VARCHAR(80) NOT NULL,
    numero_carnet                       INTEGER NOT NULL,
    razon_social                        VARCHAR(80) NOT NULL,
    capital_disponible                  INTEGER NOT NULL,
    FK_clienteJuridicofisico_lugar      INTEGER NOT NULL,
    FK_clienteJuridicofiscal_lugar      INTEGER NOT NULL,
    FK_clienteJuridico_usuario          INTEGER NOT NULL,
    
    
    CONSTRAINT PK_clienteJuridico PRIMARY KEY (codigo_clienteJuridico),
    CONSTRAINT FK_cj_clienteJuridicofisico_lugar FOREIGN KEY (FK_clienteJuridicofisico_lugar) REFERENCES lugar(codigo_lugar)ON DELETE CASCADE,
    CONSTRAINT FK_cj_clienteJuridicofiscal_lugar FOREIGN KEY (FK_clienteJuridicofiscal_lugar) REFERENCES lugar(codigo_lugar)ON DELETE CASCADE,
    CONSTRAINT FK_cj_clienteJuridico_usuario FOREIGN KEY (FK_clienteJuridico_usuario) REFERENCES usuario(codigo_usuario)ON DELETE CASCADE
); 



CREATE TABLE presupuesto(
    codigo_presupuesto                  SERIAL,
    fecha_presupuesto                   DATE,
    totalPresupuesto                    Numeric(15,2),
    FK_presupuesto_clienteNatural       INTEGER,
    FK_presupuesto_clienteJuridico      INTEGER,
    
    
    CONSTRAINT PK_presupuesto PRIMARY KEY (codigo_presupuesto),
    CONSTRAINT FK_p_presupuesto_clienteNatural FOREIGN KEY (FK_presupuesto_clienteNatural) REFERENCES clienteNatural(codigo_clienteNatural)ON DELETE CASCADE,
    CONSTRAINT FK_p_presupuesto_clienteJuridico FOREIGN KEY (FK_presupuesto_clienteJuridico) REFERENCES clienteJuridico(codigo_clienteJuridico) ON DELETE CASCADE
);

CREATE TABLE email (
    codigo_email                        SERIAL,
    direccion_email                     VARCHAR(50),
    FK_email_proveedor                  INTEGER NOT NULL,
    FK_email_clienteJuridico            INTEGER NOT NULL,
    
    
    CONSTRAINT PK_email PRIMARY KEY (codigo_email),
    CONSTRAINT FK_e_email_proveedor FOREIGN KEY (FK_email_proveedor) REFERENCES proveedor(codigo_proveedor)ON DELETE CASCADE,
    CONSTRAINT FK_e_email_clienteJuridico FOREIGN KEY (FK_email_clienteJuridico) REFERENCES clienteJuridico(codigo_clienteJuridico)ON DELETE CASCADE
);

CREATE TABLE personaContacto(
    codigo_personaContacto              SERIAL,
    nombre                              VARCHAR(20) NOT NULL,
    apellido                            VARCHAR(20) NOT NULL,
    FK_personaContacto_clienteJuridico  INTEGER NOT NULL,
    FK_personaContacto_proveedor        INTEGER NOT NULL,
    
    
    CONSTRAINT PK_pc_personaContacto PRIMARY KEY(codigo_personaContacto),
    CONSTRAINT FK_pc_personaContacto_clienteJuridico FOREIGN KEY (FK_personaContacto_clienteJuridico)  REFERENCES clienteJuridico(codigo_clienteJuridico)ON DELETE CASCADE,
    CONSTRAINT FK_pc_personaContacto_proveedor FOREIGN KEY (FK_personaContacto_proveedor) REFERENCES proveedor(codigo_proveedor)ON DELETE CASCADE
);

CREATE TABLE rol_privilegio (
    id_rp                               SERIAL,
    FK_rp_rol                           INTEGER NOT NULL,
    FK_rp_privilegio                    INTEGER NOT NULL,
    
    
    CONSTRAINT PK_rol_privilegio PRIMARY KEY (id_rp),
    CONSTRAINT FK_rop_rp_rol FOREIGN KEY (FK_rp_rol) REFERENCES rol(codigo_rol)ON DELETE CASCADE,
    CONSTRAINT FK_rop_rp_privilegio FOREIGN KEY (FK_rp_privilegio) REFERENCES privilegio(codigo_privilegio)ON DELETE CASCADE
);

CREATE TABLE tasa_monedaExtranjera(
    id_tm                                 SERIAL,
    FK_tm_tasaCambiaria                   INTEGER NOT NULL,
    FK_tm_monedaExtranjera                INTEGER NOT NULL,
    
    
    CONSTRAINT PK_tasa_monedaExtranjera   PRIMARY KEY (id_tm),
    CONSTRAINT FK_tm_tm_tasaCambiaria    FOREIGN KEY (FK_tm_tasaCambiaria) REFERENCES tasaCambiaria(codigo_tasaCambiaria)ON DELETE CASCADE,
    CONSTRAINT FK_tm_tm_monedaExtranjera FOREIGN KEY (FK_tm_monedaExtranjera) REFERENCES monedaExtranjera(codigo_monedaExtranjera)ON DELETE CASCADE
);

CREATE TABLE puntoVenta(
    codigo_puntoVenta                   SERIAL,
    cantidad                            Numeric(15,2) NOT NULL,
    FK_puntoVenta_puntoValor            INTEGER,
    
    
    CONSTRAINT PK_puntoVenta PRIMARY KEY (codigo_puntoVenta),
    CONSTRAINT FK_p_puntoVenta FOREIGN KEY (FK_puntoVenta_puntoValor) REFERENCES puntoValor(codigo_puntoValor)ON DELETE CASCADE
);

CREATE TABLE pagoWeb_puntoVenta(
    id_pwpv                             SERIAL,
    FK_pwpv_pagoWeb                     INTEGER NOT NULL,
    FK_pwpv_puntoVenta                  INTEGER NOT NULL,
    
    
    CONSTRAINT PK_pagoWeb_puntoVenta PRIMARY KEY (id_pwpv),
    CONSTRAINT FK_pwpv_pwpv_pagoWeb FOREIGN KEY (FK_pwpv_pagoWeb) REFERENCES pagoWeb(codigo_pagoweb)ON DELETE CASCADE,
    CONSTRAINT FK_pwpv_puntoVenta FOREIGN KEY (FK_pwpv_puntoVenta) REFERENCES puntoVenta(codigo_puntoVenta)ON DELETE CASCADE
);

CREATE TABLE telefono(
    Codigo_telefono                     SERIAL,
    numero                              INTEGER NOT NULL,
    cod_area                            INTEGER NOT NULL CHECK(cod_area IN('0412','0414','0416','0424','0426')),
    FK_telefono_proveedor               INTEGER,
    FK_telefono_clienteNatural          INTEGER,
    FK_telefono_clienteJuridico         INTEGER,
    
    
    CONSTRAINT PK_telefono PRIMARY KEY (Codigo_telefono),
    CONSTRAINT FK_t_telefono_proveedor FOREIGN KEY (FK_telefono_proveedor) REFERENCES proveedor(codigo_proveedor)ON DELETE CASCADE,
    CONSTRAINT FK_t_telefono_clienteNatural FOREIGN KEY (FK_telefono_clienteNatural) REFERENCES clienteNatural(codigo_clienteNatural)ON DELETE CASCADE,
    CONSTRAINT FK_t_telefono_clienteJuridico FOREIGN KEY (FK_telefono_clienteJuridico) REFERENCES clienteJuridico(codigo_clienteJuridico)ON DELETE CASCADE
);

CREATE TABLE evento_proveedor(
    id_ep                               SERIAL,
    FK_ep_evento                        INTEGER NOT NULL,
    FK_ep_proveedor                     INTEGER NOT NULL,
    FK_ep_actividad                     INTEGER,
    
    
    CONSTRAINT PK_evento_proveedor PRIMARY KEY (id_ep),
    CONSTRAINT FK_ep_eventoProvedor_evento FOREIGN KEY (FK_ep_evento) REFERENCES evento(codigo_evento)ON DELETE CASCADE,
    CONSTRAINT FK_ep_eventoProveedor_proveedor FOREIGN KEY (FK_ep_proveedor) REFERENCES proveedor(codigo_proveedor)ON DELETE CASCADE,
    CONSTRAINT FK_ep_eventoProveedor_actividad FOREIGN KEY (FK_ep_actividad) REFERENCES actividad(codigo_actividad)ON DELETE CASCADE
);

CREATE TABLE cargo (
    codigo_cargo                        SERIAL,
    nombre                              VARCHAR(20),
    
    
    CONSTRAINT PK_cargo PRIMARY KEY (codigo_cargo)

);

CREATE TABLE empleado (
    codigo_empleado                     SERIAL,
    nombre                              VARCHAR(20) NOT NULL,
    apellido                            VARCHAR(20) NOT NULL,
    cedula                              VARCHAR(8) NOT NULL,
    FK_empleado_usuario                 INTEGER NOT NULL,
    FK_empleado_tienda                  INTEGER NOT NULL,
    FK_empleado_cargo                   INTEGER NOT NULL,
    
    
    CONSTRAINT PK_empleado PRIMARY KEY (codigo_empleado),
    CONSTRAINT FK_e_empleado_usuario FOREIGN KEY (Fk_empleado_usuario) REFERENCES usuario(codigo_usuario)ON DELETE CASCADE,
    CONSTRAINT FK_e_empleado_tienda FOREIGN KEY (FK_empleado_tienda) REFERENCES tienda(codigo_tienda)ON DELETE CASCADE,
    CONSTRAINT FK_e_empleado_cargo FOREIGN KEY (FK_empleado_cargo) REFERENCES cargo(codigo_cargo) ON DELETE CASCADE
);

CREATE TABLE empleado_beneficio(
    id_empBen                           SERIAL,
    FK_empBen_empleado                  INTEGER NOT NULL,
    FK_empBEN_beneficio                 INTEGER NOT NULL,
    
    
    CONSTRAINT PK_empleado_beneficio PRIMARY KEY (id_empBen),
    CONSTRAINT FK_eb_empBen_empleado FOREIGN KEY (FK_empBen_empleado) REFERENCES empleado(codigo_empleado)ON DELETE CASCADE,
    CONSTRAINT FK_eb_empBEN_beneficio FOREIGN KEY (FK_empBen_beneficio) REFERENCES beneficio(codigo_beneficio)ON DELETE CASCADE
);

CREATE TABLE almacen (
    codigo_almacen                      SERIAL, 
    total_stock                         INTEGER NOT NULL,
    FK_almacen_empleado                 INTEGER NOT NULL,
    
       
    CONSTRAINT PK_almacen PRIMARY KEY (codigo_almacen),
    CONSTRAINT FK_a_almacen_empleado FOREIGN KEY (FK_almacen_empleado) REFERENCES empleado(codigo_empleado)  ON DELETE CASCADE         
);

CREATE TABLE pasillo (
    codigo_pasillo                      SERIAL,
    numero_pasillo                      INTEGER NOT NULL,
    letra_pasillo                       CHAR NOT NULL,
    FK_pasillo_almacen                  INTEGER NOT NULL,
    
    
    CONSTRAINT PK_pasillo PRIMARY KEY (codigo_pasillo),
    CONSTRAINT FK_p_pasillo_almacen FOREIGN KEY (FK_pasillo_almacen) REFERENCES almacen(codigo_almacen)ON DELETE CASCADE
);

CREATE TABLE anaquel (
    codigo_anaquel                      SERIAL,
    cantidad_productos                  INTEGER NOT NULL,
    FK_anaquel_pasillo                  INTEGER,
    
    
    CONSTRAINT PK_anaquel PRIMARY KEY (codigo_anaquel),
    CONSTRAINT FK_a_anaquel_pasillo FOREIGN KEY (FK_anaquel_pasillo) REFERENCES pasillo(codigo_pasillo) ON DELETE CASCADE
);

CREATE TABLE cerveza(
    codigo_cerveza                      SERIAL,
    nombre                              VARCHAR(80) NOT NULL,
    precio                              Numeric(15,2) NOT NULL,
    caloria                             INTEGER NOT NULL,
    Volumen                             INTEGER,
    historia                            TEXT NOT NULL,
    FK_cerveza_anaquel                  INTEGER,
    FK_cerveza_tipoCerveza              INTEGER NOT NULL,
    
    
    CONSTRAINT PK_cerveza PRIMARY KEY (codigo_cerveza),
    CONSTRAINT FK_c_cerveza_anaquel FOREIGN KEY (FK_cerveza_anaquel) REFERENCES anaquel(codigo_anaquel)ON DELETE CASCADE,
    CONSTRAINT FK_c_cerveza_tipoCerveza FOREIGN KEY (FK_cerveza_tipoCerveza) REFERENCES tipoCerveza(codigo_tipoCerveza)ON DELETE CASCADE
);

CREATE TABLE comentario(
    codigo_comentario                   SERIAL,
    calificacion                        INTEGER NOT NULL,
    descripcion                         TEXT,
    FK_comentario_cerveza               INTEGER,
    FK_comentario_clienteJuridico       INTEGER,
    FK_comentario_clienteNatural        INTEGER,
    
    
    CONSTRAINT PK_comentario PRIMARY KEY(codigo_comentario),
    CONSTRAINT FK_c_comentario_cerveza FOREIGN KEY (FK_comentario_cerveza) REFERENCES cerveza(codigo_cerveza)ON DELETE CASCADE,
    CONSTRAINT FK_c_comentario_clienteJuridico FOREIGN KEY (FK_comentario_clienteJuridico) REFERENCES clienteJuridico(codigo_clienteJuridico)ON DELETE CASCADE,
    CONSTRAINT FK_c_comentario_clienteNatural FOREIGN KEY (FK_comentario_clienteNatural) REFERENCES clienteNatural (codigo_clienteNatural)ON DELETE CASCADE
);

 CREATE TABLE detalle_Compra(
     id_dc                              SERIAL,
     cantidad                           INTEGER NOT NULL,
     precio                             Numeric(15,2),
     tipo                               VARCHAR(20) NOT NULL,
     FK_dc_compra                       INTEGER NOT NULL,
     FK_dc_cerveza                      INTEGER NOT NULL,
     
     
     CONSTRAINT PK_detalle__Compra PRIMARY KEY (id_dc),
     CONSTRAINT FK_dc_dc_compra FOREIGN KEY (FK_dc_compra) REFERENCES compra(codigo_compra)ON DELETE CASCADE,
     CONSTRAINT FK_dc_dc_cerveza FOREIGN KEY (FK_dc_cerveza) REFERENCES cerveza(codigo_cerveza)ON DELETE CASCADE
 );

CREATE TABLE imagenCerveza(
    codigo_imagenCerveza               SERIAL,
    imagen                              VARCHAR(50) NOT NULL,
    FK_imagenCerveza_cerveza                   INTEGER NOT NULL,
    
    
    CONSTRAINT PK_imagenCerveza PRIMARY KEY (codigo_imagenCerveza),
    CONSTRAINT FK_i_imagenCerveza_cerveza FOREIGN KEY (FK_imagenCerveza_cerveza) REFERENCES cerveza(codigo_cerveza)ON DELETE CASCADE 
);

CREATE TABLE inventario_cerveza(
    id_invCer                           SERIAL,
    cantidad                            INTEGER NOT NULL,
    FK_inverCer_evento                  INTEGER NOT NULL,
    FK_inCer_cerveza                    INTEGER NOT NULL,
    
    
    CONSTRAINT id_inCer PRIMARY KEY (id_invCer),
    CONSTRAINT FK_ic_inverCer_evento FOREIGN KEY (FK_inverCer_evento) REFERENCES evento(codigo_evento)ON DELETE CASCADE,
    CONSTRAINT FK_ic_inCer_cerveza FOREIGN KEY (FK_inCer_cerveza) REFERENCES cerveza(codigo_cerveza)ON DELETE CASCADE
);

CREATE TABLE caracteristica(
    codigo_caracteristica                SERIAL,
    nombre                              VARCHAR(40),
    color                               VARCHAR(40) NOT NULL,
    grado_alcohol                       Numeric(4) NOT NULL,
    densidad_inicial                    Numeric(4) NOT NULL,
    densidad_final                      Numeric(4) NOT NULL,
    ibus                                Numeric(4) NOT NULL,
    aroma                               TEXT,
    sabor                               TEXT,
    historia                            TEXT,
    FK_caracteristica_tipocerveza       INTEGER NOT NULL,
    
    
    CONSTRAINT PK_caracteristica PRIMARY KEY (codigo_caracteristica),
    CONSTRAINT FK_c_caracteristica_tipocerveza FOREIGN KEY (FK_caracteristica_tipocerveza) References tipocerveza(codigo_tipoCerveza)ON DELETE CASCADE
);

CREATE TABLE vacacion(
    codigo_vacacion                     SERIAL,
    fecha_inicio                        DATE,
    fecha_fin                           DATE,
    FK_vacacion_empleado                INTEGER NOT NULL,
    
    
    CONSTRAINT PK_vacacion PRIMARY KEY (codigo_vacacion),
    CONSTRAINT FK_v_vacacion_empleado FOREIGN KEY (FK_vacacion_empleado) REFERENCES empleado(codigo_empleado)  ON DELETE CASCADE
);


CREATE TABLE venta(
    codigo_venta                        SERIAL,
    numero_facturaVenta                 INTEGER NOT NULL,
    fecha_venta                         DATE,
    total                               Numeric(15,2),
    FK_venta_puntoCompra                INTEGER NOT NULL,
    FK_venta_presupuesto                INTEGER NOT NULL,
    FK_venta_empleado                   INTEGER NOT NULL,
    
    
    CONSTRAINT PK_venta PRIMARY KEY (codigo_venta),
    CONSTRAINT FK_v_venta_puntoCompra FOREIGN KEY (FK_venta_puntoCompra) REFERENCES puntoCompra(codigo_puntoCompra)ON DELETE CASCADE,
    CONSTRAINT FK_v_venta_presupuesto FOREIGN KEY (FK_venta_presupuesto) REFERENCES presupuesto(codigo_presupuesto)ON DELETE CASCADE,
    CONSTRAINT FK_v_venta_empleado FOREIGN KEY (FK_venta_empleado) REFERENCES empleado(codigo_empleado)ON DELETE CASCADE
);

CREATE TABLE estatus_conexe(
    id_ecx                              SERIAL,
    fecha_hora                          TIMESTAMP,
    FK_ecx_venta                        INTEGER NOT NULL,
    FK_ecx_compra                       INTEGER NOT NULL,
    
    
    CONSTRAINT PK_estatus_conex PRIMARY KEY (id_ecx),
    CONSTRAINT FK_ec_ecx_venta FOREIGN KEY (FK_ecx_venta) REFERENCES venta(codigo_venta)ON DELETE CASCADE,
    CONSTRAINT FK_ec_ecx_compra FOREIGN KEY (FK_ecx_compra) REFERENCES compra(codigo_compra)ON DELETE CASCADE
);

CREATE TABLE punto_puntoValor(
    id_pp                               SERIAL,
    FK_pp_puntoValor                    INTEGER NOT NULL,
    FK_pp_puntoCompra                   INTEGER NOT NULL,
    
    
    CONSTRAINT PK_punto_puntoValor PRIMARY KEY (id_pp),
    CONSTRAINT FK_pup_pp_puntoValor FOREIGN KEY (FK_pp_puntoValor) REFERENCES puntoValor(codigo_puntoValor)ON DELETE CASCADE,
    CONSTRAINT FK_pup_pp_puntoCompra FOREIGN KEY (FK_pp_puntoCompra) REFERENCES puntoCompra(codigo_puntoCompra)ON DELETE CASCADE
);

CREATE TABLE detalleVenta(
    codigo_detalleVenta                 SERIAL,
    cantidad                            INTEGER Not NULL,
    precio                              Numeric(15,2) Not NULL,
    FK_detalleVenta_venta               INTEGER NOT NULL,
    FK_detalleVenta_cerveza             INTEGER NOT NULL,
    
    
    CONSTRAINT PK_codigo_detalleVenta PRIMARY KEY (codigo_detalleVenta),
    CONSTRAINT FK_dv_detalleVenta_venta FOREIGN KEY (FK_detalleVenta_venta) REFERENCES venta(codigo_venta)ON DELETE CASCADE,
    CONSTRAINT FK_dv_detalleVenta_cerveza FOREIGN KEY (FK_detalleVenta_cerveza) References cerveza(codigo_cerveza)ON DELETE CASCADE
);

CREATE TABLE empleado_horario(
    id_eh                               SERIAL,
    FK_eh_empleado                      INTEGER NOT NULL,
    FK_eh_horario                       INTEGER NOT NULL,
    
    
    CONSTRAINT PK_empleado_horario PRIMARY KEY (id_eh),
    CONSTRAINT FK_eh_eh_empleado FOREIGN KEY (FK_eh_empleado) REFERENCES empleado(codigo_empleado)ON DELETE CASCADE,
    CONSTRAINT FK_eh_eh_horario FOREIGN KEY (FK_eh_horario) REFERENCES horario(codigo_horario)ON DELETE CASCADE
);

CREATE TABLE falta(
    codigo_falta                        SERIAL,
    tipo                                VARCHAR(15) NOT NULL,
    fecha                               DATE,
    FK_falta_empleado                   INTEGER NOT NULL,
    
   
    CONSTRAINT PK_falta PRIMARY KEY (codigo_falta),
    CONSTRAINT FK_f_falta_empleado FOREIGN KEY (FK_falta_empleado) REFERENCES empleado(codigo_empleado)ON DELETE CASCADE
);

CREATE TABLE revista (
    codigo_revista                      SERIAl,
    fecha_publicacion                   DATE,
    
    
    CONSTRAINT PK_revista PRIMARY KEY (codigo_revista)
);

CREATE TABLE revista_cerveza(
    id_rc                               SERIAL,
    porcentaje_descuento               INTEGER Not NULL,
    FK_rc_revista                       INTEGER NOT NULL,
    FK_rc_cerveza                       INTEGER NOT NULL,
    
    
    CONSTRAINT PK_revista_cerveza PRIMARY KEY (id_rc),
    CONSTRAINT FK_rec_rc_revista FOREIGN KEY (FK_rc_revista) REFERENCES revista(codigo_revista)ON DELETE CASCADE,
    CONSTRAINT FK_rec_rc_cerveza FOREIGN KEY (FK_rc_cerveza) REFERENCES cerveza(codigo_cerveza)ON DELETE CASCADE
);

CREATE TABLE pagoTienda (
    codigo_pagoTienda                   SERIAL,
    monto                               Numeric(15,2) NOT NULL,
    FK_pagoTienda_efectivo              INTEGER ,
    FK_pagoTienda_tarjetaDebito         INTEGER ,
    FK_pagoTienda_tarjetaCredito        INTEGER ,
    FK_pagoTienda_monedaExtranjera      INTEGER ,
    FK_pagoTienda_cheque                INTEGER ,
    FK_pagoTienda_transferencia         INTEGER ,
    FK_pagoTienda_venta                 INTEGER ,
    FK_pagoTienda_puntoVenta            INTEGER ,
    
    
    CONSTRAINT PK_pagoTienda PRIMARY KEY (codigo_pagoTienda),
    CONSTRAINT FK_pt_pagoTienda_efectivo FOREIGN KEY (FK_pagoTienda_efectivo) REFERENCES efectivo(codigo_efectivo)ON DELETE CASCADE,
    CONSTRAINT FK_pt_pagoTienda_tarjetaDebito FOREIGN KEY (FK_pagoTienda_tarjetaDebito) REFERENCES tarjetaDebito(codigo_tarjetaDebito)ON DELETE CASCADE,
    CONSTRAINT FK_pt_pagoTienda_tarjetaCredito FOREIGN KEY (FK_pagoTienda_tarjetaCredito) REFERENCES tarjetaCredito(codigo_tarjetaCredito)ON DELETE CASCADE,
    CONSTRAINT FK_pt_pagotTienda_monedaExtranjera FOREIGN KEY (FK_pagoTienda_monedaExtranjera) REFERENCES monedaExtranjera(codigo_monedaExtranjera)ON DELETE CASCADE,
    CONSTRAINT FK_pt_pagoTienda_cheque FOREIGN KEY (FK_pagoTienda_cheque) REFERENCES cheque(codigo_cheque)ON DELETE CASCADE,
    CONSTRAINT FK_pt_pagoTienda_transferencia FOREIGN KEY (FK_pagoTienda_transferencia) REFERENCES transferencia(codigo_transferencia)ON DELETE CASCADE,
    CONSTRAINT FK_pt_pagoTienda_venta FOREIGN KEY (FK_pagoTienda_venta) REFERENCES venta(codigo_venta)ON DELETE CASCADE,
    CONSTRAINT FK_pt_pagoTienda_puntoVenta FOREIGN KEY (FK_pagoTienda_puntoVenta) REFERENCES puntoVenta(codigo_puntoVenta)ON DELETE CASCADE
);

/*ESTA EXTENSION SOLO SE DEBE CREAR UNA VEZ, SI YA SE CREO NO SE CARGA CON LAS TABLAS*/


CREATE EXTENSION pgcrypto; /*IMPORTANTE*/


/*ESTA EXTENSION SOLO SE DEBE CREAR UNA VEZ, SI YA SE CREO NO SE CARGA CON LAS TABLAS*/




